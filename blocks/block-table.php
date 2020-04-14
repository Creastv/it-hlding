<div itemscope itemtype="http://schema.org/Table">
<h2 itemprop="about"><?php the_field('tytul_'); ?></h2>
<div class="tab-it">
<?php $table = get_field( 'tabla' );
if ( ! empty( $table ) ) {
    echo '<table border="0" class="table table-hover table_it">';
        if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
        }
        if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }

                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
    }
?>
</div>