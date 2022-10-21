<?php
/**
 * 归档
 *
 * @package custom
 */ 
 $this->need('header.php'); 
 ?>
<article class="container box style3">
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    while($archives->next()):
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
        $y=$year; $m=$mon;
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<hr /><h2>'. $year .' 年</h2><ul class="archive archive-year"><hr />'; //输出年份
        }
        if ($mon != $mon_tmp) {
            $mon = $mon_tmp;
            $output .= '<li class="archive"><span><h3>'. $mon .'月</h3></span><ul class="archive-posts archive-month">'; //输出月份
        }
        $output .= '<li class="li_guidang archive-post archive-day"><h4>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> <em>('. $archives->commentsNum.')</em></h4></li>'; //输出文章日期和标题
    endwhile;
    $output .= '</ul></li></ul>';
    echo $output;
?>
  <hr /> <p align="right"> 访问：<?php get_post_view($this) ?>次</p>
  </article>
<?php $this->need('footer.php'); ?>