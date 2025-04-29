<?php

/**
 * Copyright © . All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

class_alias(
    \OxidEsales\Eshop\Application\Model\User::class,
    \\Extension\Model\User_parent::class
);

class_alias(
    \OxidEsales\Eshop\Application\Controller\StartController::class,
    \\Extension\Controller\StartController_parent::class
);

class_alias(
    \OxidEsales\Eshop\Application\Model\Basket::class,
    \\Extension\Model\Basket_parent::class
);

class_alias(
    \OxidEsales\Eshop\Application\Controller\ArticleDetailsController::class,
    \\ProductVote\Controller\ArticleDetailsController_parent::class
);

class_alias(
    \OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class,
    \\ProductVote\Widget\ArticleDetails_parent::class
);
