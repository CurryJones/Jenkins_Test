<?php
class FlowManager extends Model
{
    public function getFlows()
    {
        return $this->getAllElements('flows', 'Flow');
    }
}
