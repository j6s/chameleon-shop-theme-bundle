<?php

/** @var $oArticleList TdbShopArticleList */
/** @var $sViewIdentKey string */
$oViewRender = new ViewRenderer();
$oViewRender->addMapperFromIdentifier('chameleon_system_shop.mapper.list.article_list_pager');
$oViewRender->AddSourceObject('oList', $oArticleList);
$oViewRender->AddSourceObject('listIdent', $sViewIdentKey);
$oViewRender->generateSourceObjectForObjectList(
    'aArticleList', // target name
    'oList', // from
    'oObject', // as
    '/common/teaser/notice-with-hover.html.twig', // with this view
    array(
         'chameleon_system_shop_currency.mapper.shop_currency_mapper',
         'TPkgShopMapper_ArticleTeaserBase',
         'chameleon_system_shop.mapper.notice_list.article_remove',
         'TPkgShopMapper_ArticleQuickShopLink',
         'TPkgShopMapper_ArticleRatingAverage',
         'TPkgShopMapper_ArticleShippingTime',
         'TPkgShopMapper_ArticleTransferToBasket',
    ) // using the following mappers
);
echo $oViewRender->Render('/common/lists/listStandardShopArticle.html.twig');
