<?php

namespace MY\MediaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MYMediaBundle extends Bundle
{
  /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataMediaBundle';
    }
}
