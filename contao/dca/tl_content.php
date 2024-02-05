<?php

declare(strict_types=1);

$GLOBALS['TL_DCA']['tl_content']['palettes']['plyr'] = '
    {type_legend},type,headline;
    {source_legend},playerSRC;
    {player_legend},playerSize,playerOptions,playerStart,playerStop,playerCaption,playerPreload;
    {poster_legend:hide},posterSRC;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID;
    {invisible_legend:hide},invisible,start,stop
';
