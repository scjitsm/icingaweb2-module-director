<?php

namespace Icinga\Module\Director\Objects;

class IcingaTemplateChoiceHost extends IcingaTemplateChoice
{
    protected $table = 'icinga_service_template_choice';

    protected $objectTable = 'icinga_service';
}