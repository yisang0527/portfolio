<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/style.css">

<article id="bo_v" style="width:<?php echo $width; ?>">

    <!-- 이미지 출력 -->
    <?php
    $v_img_count = count($view['file']);
    if($v_img_count) {
        echo "<div id=\"bo_v_img\">\n";
        foreach($view['file'] as $view_file) {
            echo get_file_thumbnail($view_file);
        }
        echo "</div>\n";
    }
    ?>

    <!-- 상세 설명 -->
    <section class="book-detail">
        <h3 class="detail-title">상세 설명</h3>
        <div class="book-detail-content">
            <?php echo get_view_thumbnail($view['content']); ?>
        </div>
    </section>

</article>