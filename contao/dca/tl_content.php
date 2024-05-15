<?php

declare(strict_types=1);

use Respinar\ContaoPlyrBundle\Controller\ContentElement\PlyrController;

$GLOBALS['TL_DCA']['tl_content']['palettes'][PlyrController::TYPE] = '
    {type_legend},type,headline;
    {source_legend},playerSRC;
    {texttrack_legend},textTrackSRC;
    {player_legend},playerOptions,playerSize,playerPreload,playerCaption,playerStart,playerStop;
    {poster_legend:hide},posterSRC;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop';