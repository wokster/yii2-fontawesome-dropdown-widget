<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 02.06.2016
 * Time: 16:12
 */
use \yii\bootstrap\Modal;
?>
<?=$input?>
<button type="button" type="button" data-toggle="modal" data-target="#font_awesome_choice" class="btn btn-primary" id="btn_font_awesome_choice">
  <?php if(!empty($this->value)):?>
    chosen <i class="fa fa-<?=$this->value?>" aria-hidden="true"></i>, click to choice another one
  <?php else:?>
    Click to choice
  <?php endif;?>
</button>
<?php Modal::begin([
  'id'=>'font_awesome_choice',
  'header' => 'Click to choice',
  'toggleButton' => false,
])?>
<div class="container-fluid">
  <section id="web-application">
    <?= \yii\bootstrap\Collapse::widget([
      'items' => [



        [
            'label' => 'популярные',
            'content' => '
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plane"><i class="fa fa-plane" aria-hidden="true"></i></button>            
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-text"><i class="fa fa-file-text" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="list-ol"><i class="fa fa-list-ol" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="clipboard"><i class="fa fa-clipboard" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-globe"><i class="fa fa-globe" aria-hidden="true"></i></button>

        ',
            'contentOptions' => ['class' => 'in']],

          [
              'label' => 'транспорт, здания',
              'content' => '
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="truck"><i class="fa fa-truck" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bus"><i class="fa fa-bus" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cab"><i class="fa fa-cab" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="car"><i class="fa fa-car" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plane"><i class="fa fa-plane" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="paper-plane"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
             <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="paper-plane-o"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="space-shuttle"><i class="fa fa-space-shuttle" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="building"><i class="fa fa-building" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="building-o"><i class="fa fa-building-o" aria-hidden="true"></i></button>    
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bank"><i class="fa fa-bank" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="fighter-jet"><i class="fa fa-fighter-jet" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="home"><i class="fa fa-home" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hotel"><i class="fa fa-hotel" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="motorcycle"><i class="fa fa-motorcycle" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="road"><i class="fa fa-road" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="rocket"><i class="fa fa-rocket" aria-hidden="true"></i></button>
        '
          ],
         
          [
              'label' => 'документы, календари, графики',
              'content' => '
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="navicon"><i class="fa fa-navicon" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="clone"><i class="fa fa-clone" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bars"><i class="fa fa-bars" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-archive-o"><i class="fa fa-file-archive-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-audio-o"><i class="fa fa-file-audio-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-code-o"><i class="fa fa-file-code-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-excel-o"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-image-o"><i class="fa fa-file-image-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-movie-o"><i class="fa fa-file-movie-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-pdf-o"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-photo-o"><i class="fa fa-file-photo-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-picture-o"><i class="fa fa-file-picture-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-powerpoint-o"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-sound-o"><i class="fa fa-file-sound-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-video-o"><i class="fa fa-file-video-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-word-o"><i class="fa fa-file-word-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="file-zip-o"><i class="fa fa-file-zip-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calculator"><i class="fa fa-calculator" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calendar"><i class="fa fa-calendar" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calendar-check-o"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calendar-minus-o"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calendar-o"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calendar-plus-o"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="calendar-times-o"><i class="fa fa-calendar-times-o" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="folder"><i class="fa fa-folder" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="folder-o"><i class="fa fa-folder-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="folder-open"><i class="fa fa-folder-open" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="folder-open-o"><i class="fa fa-folder-open-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="area-chart"><i class="fa fa-area-chart" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bar-chart"><i class="fa fa-bar-chart" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bar-chart-o"><i class="fa fa-bar-chart-o" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="book"><i class="fa fa-book" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bookmark-o"><i class="fa fa-bookmark-o" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="edit"><i class="fa fa-edit" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="image"><i class="fa fa-image" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sticky-note"><i class="fa fa-sticky-note" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sticky-note-o"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></button>

        '
          ],
         

          [
              'label' => 'Стрелки, сортировка',
              'content' => '
                   <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sign-in"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="close"><i class="fa fa-close" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cloud"><i class="fa fa-cloud" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cloud-download"><i class="fa fa-cloud-download" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cloud-upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort"><i class="fa fa-sort" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-alpha-asc"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-alpha-desc"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-amount-asc"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-amount-desc"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-asc"><i class="fa fa-sort-asc" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-desc"><i class="fa fa-sort-desc" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-down"><i class="fa fa-sort-down" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-up"><i class="fa fa-sort-up" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-numeric-asc"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sort-numeric-desc"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="caret-square-o-down"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="caret-square-o-left"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="caret-square-o-up"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="caret-square-o-right"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="caret-square-o-up"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="arrows"><i class="fa fa-arrows" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="arrows-h"><i class="fa fa-arrows-h" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="arrows-v"><i class="fa fa-arrows-v" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="level-down"><i class="fa fa-level-down" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="level-up"><i class="fa fa-level-up" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="download"><i class="fa fa-download" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="exchange"><i class="fa fa-exchange" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="external-link"><i class="fa fa-external-link" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="external-link-square"><i class="fa fa-external-link-square" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="line-chart"><i class="fa fa-line-chart" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="location-arrow"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>     
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="mail-forward"><i class="fa fa-mail-forward" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="mail-reply"><i class="fa fa-mail-reply" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="mail-reply-all"><i class="fa fa-mail-reply-all" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="random"><i class="fa fa-random" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="recycle"><i class="fa fa-recycle" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="refresh"><i class="fa fa-refresh" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="retweet"><i class="fa fa-retweet" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="share-square"><i class="fa fa-share-square" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="share-square-o"><i class="fa fa-share-square-o" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="unsorted"><i class="fa fa-unsorted" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="upload"><i class="fa fa-upload" aria-hidden="true"></i></button>
  
        '
          ],      




              [
              'label' => 'Руки, части тела',
              'content' => '
   <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-grab-o"><i class="fa fa-hand-grab-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-lizard-o"><i class="fa fa-hand-lizard-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-paper-o"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-peace-o"><i class="fa fa-hand-peace-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-pointer-o"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-rock-o"><i class="fa fa-hand-rock-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-scissors-o"><i class="fa fa-hand-scissors-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-spock-o"><i class="fa fa-hand-spock-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hand-stop-o"><i class="fa fa-hand-stop-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="asl-interpreting"><i class="fa fa-asl-interpreting" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="assistive-listening-systems"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="eye"><i class="fa fa-eye" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="eye-slash"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="heart"><i class="fa fa-heart" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="heart-o"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="heartbeat"><i class="fa fa-heartbeat" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="thumb-tack"><i class="fa fa-thumb-tack" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="thumbs-down"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="thumbs-o-down"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="thumbs-o-up"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="thumbs-up"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
        '
          ],       



             [
              'label' => 'Часы, время',
              'content' => '
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="history"><i class="fa fa-history" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="clock-o"><i class="fa fa-clock-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass"><i class="fa fa-hourglass" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-1"><i class="fa fa-hourglass-1" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-2"><i class="fa fa-hourglass-2" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-3"><i class="fa fa-hourglass-3" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-end"><i class="fa fa-hourglass-end" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-half"><i class="fa fa-hourglass-half" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-o"><i class="fa fa-hourglass-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hourglass-start"><i class="fa fa-hourglass-start" aria-hidden="true"></i></button>
        '
          ],     



               [
              'label' => 'Батарейка, звезда - степени заполненности',
              'content' => '
   <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="battery-0"><i class="fa fa-battery-0" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="battery-1"><i class="fa fa-battery-1" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="battery-2"><i class="fa fa-battery-2" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="battery-3"><i class="fa fa-battery-3" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="battery-4"><i class="fa fa-battery-4" aria-hidden="true"></i></button>
       <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="star"><i class="fa fa-star" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="star-half"><i class="fa fa-star-half" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="star-half-empty"><i class="fa fa-star-half-empty" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="star-half-full"><i class="fa fa-star-half-full" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="star-half-o"><i class="fa fa-star-half-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="star-o"><i class="fa fa-star-o" aria-hidden="true"></i></button>
        '
          ],     



               [
              'label' => 'Разные кружочки, ОК',
              'content' => '
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="adjust"><i class="fa fa-adjust" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="ban"><i class="fa fa-ban" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bullseye"><i class="fa fa-bullseye" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="check"><i class="fa fa-check" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="check-circle"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="check-circle-o"><i class="fa fa-check-circle-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="check-square"><i class="fa fa-check-square" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="check-square-o"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="circle"><i class="fa fa-circle" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="circle-o"><i class="fa fa-circle-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="circle-thin"><i class="fa fa-circle-thin" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="circle-o-notch"><i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="dot-circle-o"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="ellipsis-h"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="ellipsis-v"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sliders"><i class="fa fa-sliders" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="spinner"><i class="fa fa-spinner" aria-hidden="true"></i></button>
        '
          ],            
                    [
              'label' => 'Корзина, штрихкод, коробка, сумка',
              'content' => '
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="archive"><i class="fa fa-archive" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="barcode"><i class="fa fa-barcode" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="briefcase"><i class="fa fa-briefcase" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cart-arrow-down"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cart-plus"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="ship"><i class="fa fa-ship" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="shopping-bag"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="shopping-basket"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="suitcase"><i class="fa fa-suitcase" aria-hidden="true"></i></button>
        '
          ],        


                 [
              'label' => 'Разное: весы, кружка, чашка, велосипед',
              'content' => '
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="balance-scale"><i class="fa fa-balance-scale" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="beer"><i class="fa fa-beer" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bicycle"><i class="fa fa-bicycle" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="binoculars"><i class="fa fa-binoculars" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="birthday-cake"><i class="fa fa-birthday-cake" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bolt"><i class="fa fa-bolt" aria-hidden="true"></i></button>
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bomb"><i class="fa fa-bomb" aria-hidden="true"></i></button>
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="book"><i class="fa fa-book" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bookmark-o"><i class="fa fa-bookmark-o" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bug"><i class="fa fa-bug" aria-hidden="true"></i></button>
        '
          ],
                 [
              'label' => 'Человечки',
              'content' => '
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bed"><i class="fa fa-bed" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="blind"><i class="fa fa-blind" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="child"><i class="fa fa-child" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="female"><i class="fa fa-female" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="group"><i class="fa fa-group" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="male"><i class="fa fa-male" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="street-view"><i class="fa fa-street-view" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="user"><i class="fa fa-user" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="user-plus"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="user-secret"><i class="fa fa-user-secret" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="user-times"><i class="fa fa-user-times" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="users"><i class="fa fa-users" aria-hidden="true"></i></button>
        '
          ],      


                     [
              'label' => 'Техника',
              'content' => '
                    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="camera"><i class="fa fa-camera" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="camera-retro"><i class="fa fa-camera-retro" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cog"><i class="fa fa-cog" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cogs"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="fax"><i class="fa fa-fax" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="mobile"><i class="fa fa-mobile" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="print"><i class="fa fa-print" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tablet"><i class="fa fa-tablet" aria-hidden="true"></i></button>
                          <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tty"><i class="fa fa-tty" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tv"><i class="fa fa-tv" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="video-camera"><i class="fa fa-video-camera" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="desktop"><i class="fa fa-desktop" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="laptop"><i class="fa fa-laptop" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="television"><i class="fa fa-television" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="keyboard-o"><i class="fa fa-keyboard-o" aria-hidden="true"></i></button>
        '
          ],
                 [
              'label' => 'Медицина',
              'content' => '
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bed"><i class="fa fa-bed" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="blind"><i class="fa fa-blind" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="braille"><i class="fa fa-braille" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="assistive-listening-systems"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="eye"><i class="fa fa-eye" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="eye-slash"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="heart"><i class="fa fa-heart" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="heart-o"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="heartbeat"><i class="fa fa-heartbeat" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="wheelchair"><i class="fa fa-wheelchair" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="wheelchair-alt"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i></button>
        '
          ],
                 [
              'label' => 'Звук, звуки',
              'content' => '
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bell"><i class="fa fa-bell" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bell-o"><i class="fa fa-bell-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bell-slash"><i class="fa fa-bell-slash" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bell-slash-o"><i class="fa fa-bell-slash-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bullhorn"><i class="fa fa-bullhorn" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="feed"><i class="fa fa-feed" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="headphones"><i class="fa fa-headphones" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="microphone"><i class="fa fa-microphone" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="microphone-slash"><i class="fa fa-microphone-slash" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="music"><i class="fa fa-music" aria-hidden="true"></i></button>
             <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="volume-control-phone"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="volume-down"><i class="fa fa-volume-down" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="volume-off"><i class="fa fa-volume-off" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="volume-up"><i class="fa fa-volume-up" aria-hidden="true"></i></button>
        '
          ],


                    [
              'label' => 'Чат, smile',
              'content' => '
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="comment"><i class="fa fa-comment" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="comment-o"><i class="fa fa-comment-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="comments"><i class="fa fa-comments" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="comments-o"><i class="fa fa-comments-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="commenting"><i class="fa fa-commenting" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="commenting-o"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cog"><i class="fa fa-cog" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cogs"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="smile-o"><i class="fa fa-smile-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="frown-o"><i class="fa fa-frown-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hashtag"><i class="fa fa-hashtag" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="meh-o"><i class="fa fa-meh-o" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="share-alt"><i class="fa fa-share-alt" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="share-alt-square"><i class="fa fa-share-alt-square" aria-hidden="true"></i></button>
        '
          ],

               [
              'label' => 'Символы редактирования',
              'content' => '
 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="edit"><i class="fa fa-edit" aria-hidden="true"></i></button>
 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="eraser"><i class="fa fa-eraser" aria-hidden="true"></i></button>
 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="eyedropper"><i class="fa fa-eyedropper" aria-hidden="true"></i></button>
 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="filter"><i class="fa fa-filter" aria-hidden="true"></i></button>
 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="lock"><i class="fa fa-lock" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="low-vision"><i class="fa fa-low-vision" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="magic"><i class="fa fa-magic" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="object-group"><i class="fa fa-object-group" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="object-ungroup"><i class="fa fa-object-ungroup" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="paint-brush"><i class="fa fa-paint-brush" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="pencil"><i class="fa fa-pencil" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="pencil-square"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="pencil-square-o"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

        '
          ],               [
              'label' => 'Контакты, оплата',
              'content' => '
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="envelope"><i class="fa fa-envelope" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="envelope-o"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="envelope-square"><i class="fa fa-envelope-square" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="money"><i class="fa fa-money" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="phone"><i class="fa fa-phone" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="phone-square"><i class="fa fa-phone-square" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="credit-card"><i class="fa fa-credit-card" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="credit-card-alt"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></button>

        '
          ],               [
              'label' => 'Предупреждение',
              'content' => '
<button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="exclamation"><i class="fa fa-exclamation" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="exclamation-circle"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="exclamation-triangle"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></button>


        '
          ],   [
              'label' => 'Карта, навигация, глобус',
              'content' => '
   <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="map"><i class="fa fa-map" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="map-marker"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="map-o"><i class="fa fa-map-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="map-pin"><i class="fa fa-map-pin" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="map-signs"><i class="fa fa-map-signs" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="globe"><i class="fa fa-globe" aria-hidden="true"></i></button>

        '
          ],

[
              'label' => 'Минус, плюс',
              'content' => '
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="minus-circle"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="minus-square"><i class="fa fa-minus-square" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="minus-square-o"><i class="fa fa-minus-square-o" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plus-circle"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plus-square"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plus-square-o"><i class="fa fa-plus-square-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="search"><i class="fa fa-search" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="search-minus"><i class="fa fa-search-minus" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="search-plus"><i class="fa fa-search-plus" aria-hidden="true"></i></button>

        '
          ],


   [
              'label' => 'Общепринятые',
              'content' => '
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="at"><i class="fa fa-at" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bluetooth"><i class="fa fa-bluetooth" aria-hidden="true"></i></button>
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="bluetooth-b"><i class="fa fa-bluetooth-b" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cc"><i class="fa fa-cc" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="certificate"><i class="fa fa-certificate" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="close"><i class="fa fa-close" aria-hidden="true"></i></button>
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="code"><i class="fa fa-code" aria-hidden="true"></i></button>
                 <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="code-fork"><i class="fa fa-code-fork" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="coffee"><i class="fa fa-coffee" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="copyright"><i class="fa fa-copyright" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="creative-commons"><i class="fa fa-creative-commons" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="feed"><i class="fa fa-feed" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hashtag"><i class="fa fa-hashtag" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="registered"><i class="fa fa-registered" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="wifi"><i class="fa fa-wifi" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="qrcode"><i class="fa fa-qrcode" aria-hidden="true"></i></button>
<button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="question"><i class="fa fa-question" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="question-circle"><i class="fa fa-question-circle" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="question-circle-o"><i class="fa fa-question-circle-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="info"><i class="fa fa-info" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="info-circle"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
     
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="rss"><i class="fa fa-rss" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="rss-square"><i class="fa fa-rss-square" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="search"><i class="fa fa-search" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="search-minus"><i class="fa fa-search-minus" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="search-plus"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="share-alt"><i class="fa fa-share-alt" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="share-alt-square"><i class="fa fa-share-alt-square" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="trademark"><i class="fa fa-trademark" aria-hidden="true"></i></button>
        '
          ],     
           [
              'label' => 'Unsorted',
              'content' => '
              <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="puzzle-piece"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></button>    
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="server"><i class="fa fa-server" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="shield"><i class="fa fa-shield" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cog"><i class="fa fa-cog" aria-hidden="true"></i></button>
                     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cogs"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="compass"><i class="fa fa-compass" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="crop"><i class="fa fa-crop" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="crosshairs"><i class="fa fa-crosshairs" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cube"><i class="fa fa-cube" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cubes"><i class="fa fa-cubes" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="cutlery"><i class="fa fa-cutlery" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="dashboard"><i class="fa fa-dashboard" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="database"><i class="fa fa-database" aria-hidden="true"></i></button>
     
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="diamond"><i class="fa fa-diamond" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="film"><i class="fa fa-film" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="filter"><i class="fa fa-filter" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="fire"><i class="fa fa-fire" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="fire-extinguisher"><i class="fa fa-fire-extinguisher" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="flag"><i class="fa fa-flag" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="flag-checkered"><i class="fa fa-flag-checkered" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="flag-o"><i class="fa fa-flag-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="flash"><i class="fa fa-flash" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="flask"><i class="fa fa-flask" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="futbol-o"><i class="fa fa-futbol-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="gamepad"><i class="fa fa-gamepad" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="gavel"><i class="fa fa-gavel" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="gift"><i class="fa fa-gift" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="glass"><i class="fa fa-glass" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="graduation-cap"><i class="fa fa-graduation-cap" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="hdd-o"><i class="fa fa-hdd-o" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="inbox"><i class="fa fa-inbox" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="industry"><i class="fa fa-industry" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="key"><i class="fa fa-key" aria-hidden="true"></i></button>
    
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="language"><i class="fa fa-language" aria-hidden="true"></i></button>
    
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="leaf"><i class="fa fa-leaf" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="legal"><i class="fa fa-legal" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="lemon-o"><i class="fa fa-lemon-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="life-ring"><i class="fa fa-life-ring" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="lightbulb-o"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="magnet"><i class="fa fa-magnet" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="moon-o"><i class="fa fa-moon-o" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="paw"><i class="fa fa-paw" aria-hidden="true"></i></button>     
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="newspaper-o"><i class="fa fa-newspaper-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="percent"><i class="fa fa-percent" aria-hidden="true"></i></button>    
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="pie-chart"><i class="fa fa-pie-chart" aria-hidden="true"></i></button>    
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="plug"><i class="fa fa-plug" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="power-off"><i class="fa fa-power-off" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="signal"><i class="fa fa-signal" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="signing"><i class="fa fa-signing" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sitemap"><i class="fa fa-sitemap" aria-hidden="true"></i></button>
    
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="spoon"><i class="fa fa-spoon" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="square"><i class="fa fa-square" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="square-o"><i class="fa fa-square-o" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="sun-o"><i class="fa fa-sun-o" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tachometer"><i class="fa fa-tachometer" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tag"><i class="fa fa-tag" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tags"><i class="fa fa-tags" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tasks"><i class="fa fa-tasks" aria-hidden="true"></i></button>
     
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="terminal"><i class="fa fa-terminal" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="ticket"><i class="fa fa-ticket" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tint"><i class="fa fa-tint" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="toggle-off"><i class="fa fa-toggle-off" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="toggle-on"><i class="fa fa-toggle-on" aria-hidden="true"></i></button>
         <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="trash"><i class="fa fa-trash" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="trash-o"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="tree"><i class="fa fa-tree" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="trophy"><i class="fa fa-trophy" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="umbrella"><i class="fa fa-umbrella" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="universal-access"><i class="fa fa-universal-access" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="university"><i class="fa fa-university" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="unlock"><i class="fa fa-unlock" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="unlock-alt"><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
     <button type="button" class="btn btn-default btn-sm font_awesome_choice" data-icon="wrench"><i class="fa fa-wrench" aria-hidden="true"></i></button>

    
        '
          ],



      ],
    ])?>



     

    
   </div>
<?php Modal::end();?>

