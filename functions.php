<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', null, null, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
        array('ShowRecentPosts' => _t('显示最新文章'),
            'ShowRecentComments'    => _t('显示最近回复'),
            'ShowCategory'          => _t('显示分类'),
            'ShowArchive'           => _t('显示归档'),
            'ShowOther'             => _t('显示其它杂项')),
        array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));

    $form->addInput($sidebarBlock->multiMode());
}

/*
function themeFields($layout) {
$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
$layout->addItem($logoUrl);
}
 */
function get_post_img($cid)
{
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('table.contents.text')
                               ->from('table.contents')
                               ->where('table.contents.cid=?', $cid)
                               ->order('table.contents.cid', Typecho_Db::SORT_ASC)
                               ->limit(1));
    $text = $rs['text'];
    preg_match('/!\[[^\]]*]\([^\)]*\.(png|jpeg|jpg|gif|bmp)\)/i', $text, $md_img);
    if (empty($md_img)) {
        return null;
    } else {
        $img = substr_between($md_img[0], '(', ')');
        return $img;
    }

}

function substr_between($string, $start, $end = null)
{
    if (($start_pos = strpos($string, $start)) !== false) {
        if ($end) {
            if (($end_pos = strpos($string, $end, $start_pos + strlen($start))) !== false) {
                return substr($string, $start_pos + strlen($start), $end_pos - ($start_pos + strlen($start)));
            }
        } else {
            return substr($string, $start_pos);
        }
    }
    return false;
}

function get_author_info($cont)
{
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('*')->from('table.users')
                               ->where('table.users.uid=?', 1));
    $array = array('name' => $rs['screenName'],
        'mail'                => $rs['mail'],
        'avatar'              => get_avatar($rs['mail'], 120),
        'short_name'          => 'sora_yakami',
        'city'=>'Shanghai'
    );
    return $array[$cont];
}

function get_avatar($mail, $size)
{
    return 'https://cdn.v2ex.com/gravatar/' . md5($mail) . '?s=' . $size . '&r=G&d=';
}

function get_visitor()
{
    $db = Typecho_Db::get();
    $rs = $db->fetchAll($db->select('author,mail,url')->from('table.comments')
                               ->where('status=? AND authorID=?', 'approved', 0)
                               ->order('coid', Typecho_Db::SORT_DESC));
    $array = array_slice(unique_arr($rs), 0, 15);
    foreach ($array as $key => $value) {
        echo '<li class="ProfileUserList-facepileItem">
        <a class="u-block js-tooltip js-nav" href="' . $array[$key]['url'] . '">
  <img class="Avatar Avatar--size48" src="' . get_avatar($array[$key]['mail'], 60) . '" alt="' . $array[$key]['author'] . '">
</a></li>';
    }
}

function get_commenters($cid, $action = 'list')
{
    $db = Typecho_Db::get();
    $rs = $db->fetchAll($db->select('author,mail,url')->from('table.comments')
                               ->where('status=? AND cid=? AND authorID=?', 'approved', $cid, 0)
                               ->order('coid', Typecho_Db::SORT_DESC));
    if ($rs == null) {
        $unique = null;
        $array  = null;
    } else {
        $unique = unique_arr($rs);
        $array  = array_slice($unique, 0, 12);
    }

    switch ($action) {
        case 'list':
            if ($array == null) {
                return;
            }
            foreach ($array as $key => $value) {
                echo '<a class="js-profile-popup-actionable js-user-tipsy js-tooltip" href="' . $array[$key]['url'] . '">
            <img class="avatar size24 js-user-profile-link" src="'     . get_avatar($array[$key]['mail'], 60) . '" alt="' . $array[$key]['author'] . '">
          </a>'    ;
            }
            break;

        case 'comments_count':
            echo count($rs);
            break;
        case 'commenter_count':
            echo count($unique);
            break;
    }

}

function unique_arr($array2D, $stkeep = false, $ndformat = true)
{
    // 判断是否保留一级数组键 (一级数组键可以为非数字)
    if ($stkeep) {
        $stArr = array_keys($array2D);
    }

    // 判断是否保留二级数组键 (所有二级数组键必须相同)
    if ($ndformat) {
        $ndArr = array_keys(end($array2D));
    }

    //降维,也可以用implode,将一维数组转换为用逗号连接的字符串
    foreach ($array2D as $v) {
        $v      = join(",", $v);
        $temp[] = $v;
    }

    //去掉重复的字符串,也就是重复的一维数组
    $temp = array_unique($temp);

    //再将拆开的数组重新组装
    foreach ($temp as $k => $v) {
        if ($stkeep) {
            $k = $stArr[$k];
        }

        if ($ndformat) {
            $tempArr = explode(",", $v);
            foreach ($tempArr as $ndkey => $ndval) {
                $output[$k][$ndArr[$ndkey]] = $ndval;
            }

        } else {
            $output[$k] = explode(",", $v);
        }

    }

    return $output;
}

function get_comment_at($coid)
{
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != 0) {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
                                     ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        echo $author;
    } else {
        echo get_author_info('name');
    }

}

function get_filtered_comment($coid){
    $db   = Typecho_Db::get();
    $rs=$db->fetchRow($db->select('text')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $content=$rs['text'];
    echo $content;
}

function get_count($cont)
{
    $db = Typecho_Db::get();

    switch ($cont) {
        case 'article':
            $rs = $db->fetchAll($db->select('*')->from('table.contents')
                                       ->where('status = ?', 'publish'));
            break;

        case 'comments':
            $rs = $db->fetchAll($db->select('*')->from('table.comments')
                                       ->where('status = ?', 'approved'));
            break;
        case 'tags':
            $rs = $db->fetchAll($db->select('*')->from('table.metas'));
            break;

    }
    echo count($rs);

}


function is_mobile()
{
    //return true;
    $user_agent     = $_SERVER['HTTP_USER_AGENT'];
    $mobile_browser = array(
        "mqqbrowser", //手机QQ浏览器
        "opera mobi", //手机opera
        "juc", "iuc", //uc浏览器
        "fennec", "ios", "applewebKit/420", "applewebkit/525", "applewebkit/532", "ipad", "iphone", "ipaq", "ipod",
        "iemobile", "windows ce", //windows phone
        "240x320", "480x640", "acer", "android", "anywhereyougo.com", "asus", "audio", "blackberry",
        "blazer", "coolpad", "dopod", "etouch", "hitachi", "htc", "huawei", "jbrowser", "lenovo",
        "lg", "lg-", "lge-", "lge", "mobi", "moto", "nokia", "phone", "samsung", "sony",
        "symbian", "tablet", "tianyu", "wap", "xda", "xde", "zte",
    );
    $is_mobile = false;
    foreach ($mobile_browser as $device) {
        if (stristr($user_agent, $device)) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
}
