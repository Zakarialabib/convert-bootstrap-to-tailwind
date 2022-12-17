<?php

namespace Zakarialabi\TranslatableStringExporter\Core;

use Symfony\Component\Finder\Finder;

class CompareClass
{
       /**
     * Map of Bootstrap class names to Tailwind class names.
     *
     * @var string[]
     */
    protected $classNameMap = [
        'container' => 'container',
        'row' => 'flex',
        'col-xs' => 'w-full',
        'col-sm' => 'sm:w-1/2',
        // Add more class name mappings here
        'col-md' => 'md:w-1/3',
        'col-lg' => 'lg:w-1/4',
        'col-xl' => 'xl:w-1/5',
        'text-left' => 'text-left',
        'text-center' => 'text-center',
        'text-right' => 'text-right',
    ];

    /**
     * Convert Bootstrap class names to Tailwind class names in an HTML string.
     *
     * @param  string  $html
     * @return string
     */
    public function compare(string $html)
    {
        // Extract all Bootstrap class names from the HTML
        preg_match_all('/\b(container|row|col-(?:xs|sm|md|lg|xl)|text-(?:left|center|right))\b/', $html, $matches);
        $bootstrapClassNames = $matches[0];

        // Replace each Bootstrap class name with its corresponding Tailwind class name
        foreach ($bootstrapClassNames as $className) {
            if (isset($this->classNameMap[$className])) {
                $html = str_replace($className, $this->classNameMap[$className], $html);
            }
        }

        return $html;
    }   
}