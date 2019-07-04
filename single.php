<?php get_header(); ?>
<div class="container">
            
<section id="dictionary-acticle">
    <ol itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb hidden-print">
        <li class="breadcrumb-item">
            <a href="https://gufo.me/dict/accounting" itemprop="url">
                <span itemprop="title">Большой бухгалтерский словарь</span>
            </a>
        </li>
    </ol>

    <article>

        <br class="visible-print-block">

        <h1><?php the_title();?></h1>         
        
        <p>
            <span>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Нет постов по вашим критериям!</p>
                <?php endif; ?>
            </span>
        </p>

        <div class="fb-quote"></div>
        <div class="clearfix"></div>
        
        <small class="source">
            <span class="visible-print-inline">Источник: </span>
            <span>Большой бухгалтерский словарь</span>
            <span class="visible-print-inline">на Gufo.me</span>
        </small>

    </article>
    
    <div class="clearfix"></div>
    
    <nav class="hidden-print">
        <div class="row small">
            <div class="col">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i> 
                <a href="https://gufo.me/dict/accounting/%D0%B0-%D0%B4%D0%B0%D1%82%D0%BE">а-дато</a>
            </div>
            
            <div class="col text-right">
                <a href="https://gufo.me/dict/accounting/%D0%B0-%D0%BC%D0%B5%D1%82%D0%B0">а-мета</a> 
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </div>
        </div>
    </nav>

    <hr class="hidden-print">
        
</section>


    <section id="dictionary-more" class="hidden-print">
        <article>
            <h3>Значения в других словарях</h3>

            <ol>
                                                        
                    <li>
                        <a href="https://gufo.me/dict/foreign_words/%D0%B0-%D0%BA%D0%BE%D0%BD%D1%82%D0%BE">а-конто</a> —
                        [от ит. в счёт] – ком. в счёт платежа
                        <span class="small">Большой словарь иностранных слов</span>
                    </li>
                                                        
                    <li>
                        <a href="https://gufo.me/dict/orthography_lopatin/%D0%B0-%D0%BA%D0%BE%D0%BD%D1%82%D0%BE">а-конто</a> —
                        орф. а-конто, неизм.
                        <span class="small">Орфографический словарь Лопатина</span>
                    </li>
                                                        
                    <li>
                        <a href="https://gufo.me/dict/brockhaus/%D0%90-%D0%BA%D0%BE%D0%BD%D1%82%D0%BE">А-конто</a> —
                        (а conto) — означает в дословном переводе в счет. Платежи a conto означают частную уплату известной суммы в счет всей причисляющейся суммы, т. е. такую частную уплату, посредством которой погашается только часть долга.
                        <span class="small">Энциклопедический словарь Брокгауза и Ефрона</span>
                    </li>
                                                        
                    <li>
                        <a href="https://gufo.me/dict/economics_terms/%D0%90-%D0%9A%D0%9E%D0%9D%D0%A2%D0%9E">А-КОНТО</a> —
                        (от итал. a conto — в счет платежа) предварительный расчет импортера с экспортером за проданные товары в виде оплаты импортером счетов экспортера.
                        <span class="small">Экономический словарь терминов</span>
                    </li>
                                                        
                    <li>
                        <a href="https://gufo.me/dict/synonyms/%D0%B0-%D0%BA%D0%BE%D0%BD%D1%82%D0%BE">а-конто</a> —
                        сущ., кол-во синонимов: 2  в счет 5 платеж 20
                        <span class="small">Словарь синонимов русского языка</span>
                    </li>
                            </ol>
        </article>
    </section>


        </div>

        <br><br><br>

        <?php require_once "quote.php"?>

        <br>
        <?php get_footer();?>         


