<?php get_header(); ?>
<div class="container">

<section id="dictionary-list">
    <article>
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <h1 itemprop="title" data-dict-nick="accounting">Большой бухгалтерский словарь</h1>
        </span>

        <p class="small">
            Большой бухгалтерский словарь содержит около 10 000 терминов и толкований, дополненных различными пояснениями, комментариями, справочной информацией. Словарь включает: понятия отечественного бухгалтерского учета, термины, присущие международной учетной терминологии и учетной терминологии ряда развитых стран; понятия различных школ, теорий бухгалтерского учета и статьи, посвященные связанным с ними персоналиям; терминологию аудита, финансовой отчетности, бюджетного, налогового и таможенного права, статистики, организации и управления производством, товароведения; термины, учитывающие особенности учета в различных отраслях народного хозяйства (промышленности, торговле, строительстве, сельском хозяйстве, на транспорте, в биржевой торговле, в банковской и финансовой деятельности, страховании и т.д.) и др. Предназначен для широкого круга читателей и специалистов.
        </p>
        <!--АБВГД СЕКЦИЯ-->
        <nav id="abc">
            <table class="table table-responsive">
                <tbody>
                    <tr>
                        <td style="white-space: nowrap;">
	                        <i id="switch-search" class="switch-search-mode fa fa-search" style="cursor: pointer; border-right: 1px solid #ccc; padding-right: 10px; margin-right: 10px;" aria-hidden="true"></i>
	                        <span style="text-decoration: underline;">а</span>
                            <span class="ABC">б</span>
                            <span class="ABC">в</span>
                            <span class="ABC">г</span>
                            <span class="ABC">д</span>
                            <span class="ABC">е</span>
                            <span class="ABC">ё</span>
                            <span class="ABC">ж</span>
                            <span class="ABC">з</span>
                            <span class="ABC">и</span>
                            <span class="ABC">й</span>
                            <span class="ABC">к</span>
                            <span class="ABC">л</span>
                            <span class="ABC">м</span>
                            <span class="ABC">н</span>
                            <span class="ABC">о</span>
                            <span class="ABC">п</span>
                            <span class="ABC">р</span>
                            <span class="ABC">с</span>
                            <span class="ABC">т</span>
                            <span class="ABC">у</span>
                            <span class="ABC">ф</span>
                            <span class="ABC">х</span>
                            <span class="ABC">ц</span>
                            <span class="ABC">ч</span>
                            <span class="ABC">ш</span>
                            <span class="ABC">щ</span>
                            <span class="ABC">ъ</span>
                            <span class="ABC">ы</span>
                            <span class="ABC">ь</span>
                            <span class="ABC">э</span>
                            <span class="ABC">ю</span>
                            <span class="ABC">я</span>                                                                                           
                        </td>
                    </tr>
                </tbody>
            </table>
        </nav>
        
        <nav id="dict-search" style="display:none;">
            <table class="table table-responsive">
                <tbody>
                    <tr>
                        <td style="white-space: nowrap;">
	                        <span id='fromABC' class="switch-search-mode" aria-hidden="true" style="cursor: pointer; border-right: 1px solid #ccc; padding-right: 10px; margin-right: 10px;">А—Я</span>
							<input id='search-cat' class="form-control" placeholder="Поиск по словарю" type="text" id="tags" style="display: inline; font-size: 100%;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </nav>

        <br>

        <div id="all_words_js" style="display: none; min-height: 1000px;">
            <p>Начните вводить интересующее вас слово или понятие.</p>
            <br><br><br>
        </div>
        <div id="all_words" class="word-list">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-division">
                    <ul class="list-unstyled app-word-list">
                    <li>
                        <?php
                            $category = get_queried_object();
                            global $post;
                            $args = array( 'nopaging' => true , 'category' => $category->term_id, 'orderby' => 'date');
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <div class="post">
                            <!--<div class="post-img"><?php the_post_thumbnail('thumbnail'); ?></div>-->
                            <div class="post-txt">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            </div>
                            <?php
                            }
                            wp_reset_postdata();
                        ?>  
                    </li>
                    </ul>
                </div>
            </div>

        </div>
    </article>

    <div class="clearfix"></div>
                            <!--
        <nav id="next-page-control">
            <div class="row small">
                <div class="col text-right">
                    <a href="https://gufo.me/dict/accounting?page=2&amp;letter=%D0%B0" rel=“next”>Дальше</a>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </nav>
                        -->
        <hr>

</section>


</div>

        <br><br><br>

        <?php require_once "quote.php"?>

        <br>

        <?php get_footer();?>





