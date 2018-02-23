<?php
namespace SuplaApiBundle\Model\ChannelParamsUpdater;

use SuplaBundle\Enums\ChannelFunction;

class ControllingTheStaircaseTimer extends RangeParamsUpdater {
    public function __construct() {
        parent::__construct(ChannelFunction::STAIRCASETIMER(), 5, 36000);
    }
}