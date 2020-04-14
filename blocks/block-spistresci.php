<div id="spistresci" class="spistresci">
 <p>Spis treści</p>
    <?php the_field('spis'); ?>
</div>
<a class="anchorSpis" href="#spistresci">Spis treści</a>


<?php if( get_field('pozycja') == 'right' ) { ?>
    <style>
      .spistresci{
          float: right;
          max-width:300px;
          margin:10px;
      }
      .spistresci ul, .spistresci ol{
        columns: inherit;
        -webkit-columns: 1;
        -moz-columns: 1;
      }
      @media only screen and (max-width: 668px) {
        .spistresci{
            float:none;
            width:100%;
            display:block;
        }
      }

    </style>
<?php }?>
<?php if( get_field('pozycja') == 'left' ) { ?>
    <style>
      .spistresci{
          float: left;
          max-width:300px;
          margin:10px;
      }
      .spistresci ul, .spistresci ol{
        columns: inherit;
        -webkit-columns: 1;
        -moz-columns: 1;
      }
      @media only screen and (max-width: 668px) {
        .spistresci{
            float:none;
            width:100%;
            display:block;
        }
      }

    </style>
<?php }?>
