<section class="compare bg-grey--half py-5">
    <div class="container-xl">
        <h2 class="text-center mw-md-75 mb-4">
            <?=get_field('title')?>
        </h2>
        <div class="table_container">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th><img src="<?=get_stylesheet_directory_uri()?>/img/gaffsy-logo.svg"
                                alt="Gaffsy"></th>
                        <th>Estate Agent</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                while (have_rows('table')) {
                    the_row();
                    $hi = get_sub_field('highlight');
                    if ($hi == 'green-red') {
                        $ebg = 'bg--red';
                        $gbg = 'bg--green';
                    } else {
                        $gbg = 'bg--blue';
                        $ebg = 'bg--grey';
                    }
                    ?>
                    <tr>
                        <td><?=get_sub_field('item')?>
                        </td>
                        <td class="<?=$gbg?>">
                            <p><?=get_sub_field('gaffsy')?>
                            </p>
                        </td>
                        <td class="<?=$ebg?>">
                            <p><?=get_sub_field('estate_agent')?>
                            </p>
                        </td>
                    </tr>
                    <?php
                }
                $summary = get_field('summary');
            ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><?=$summary['item']?>
                        </td>
                        <td class="bg--blue fw-bold">
                            <?=$summary['gaffsy']?>
                        </td>
                        <td class="bg--grey fw-bold">
                            <?=$summary['estate_agent']?>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>