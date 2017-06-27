<?php

namespace SageSvg;

use function App\sage;
use BladeSvg\SvgFactory;

function registerBinding()
{
    if (function_exists('\\App\\sage')) {
        sage()->singleton(SvgFactory::class, function () {
            $config = [
                'inline' => true,
                'class' => 'icon',
                'svg_path' => get_stylesheet_directory().'/assets/icons/',
            ];

            return new SvgFactory($config);
        });
    }
}

function registerBladeTag()
{
    if (function_exists('\\App\\sage')) {
        sage('blade')->compiler()->directive('svg', function ($expression) {
            return "<?php echo e(\\App\\sage(\\BladeSvg\\SvgFactory::class)->svg($expression)) ?>";
        });
    }
}

if (function_exists('add_action')) {
    add_action('init', __NAMESPACE__.'\registerBinding');
    add_action('init', __NAMESPACE__.'\registerBladeTag');
}
