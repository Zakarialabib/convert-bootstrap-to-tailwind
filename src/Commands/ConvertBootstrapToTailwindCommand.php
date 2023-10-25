<?php

namespace Zakarialabib\ConvertBootstrapToTailwind\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Zakarialabib\ConvertBootstrapToTailwind\Core\CompareClass;

class ConvertBootstrapToTailwindCommand extends Command
{
    protected $signature = 'analyze:views {--change}';

    protected $description = 'Analyze view files and suggest Bootstrap to Tailwind CSS class name changes';

    public function handle()
    {
        $comparer = new CompareClass();

        $viewFiles = $this->getViewFiles();
        foreach ($viewFiles as $viewFile) {
            $originalHtml = $this->getHtmlFromFile($viewFile);
            $modifiedHtml = $comparer->compare($originalHtml);

            if ($modifiedHtml !== $originalHtml) {
                $this->handleChangeOption($viewFile, $modifiedHtml);
            }
        }

        return 0;
    }

    protected function handleChangeOption(string $viewFile, string $modifiedHtml): void
    {
        $change = $this->option('change');

        if ($change) {
            $this->writeHtmlToFile($viewFile, $modifiedHtml);
            $this->info("Changed Bootstrap class names in $viewFile");
        } else {
            $this->info("Suggested changes for $viewFile:");
            $this->info($modifiedHtml);
        }
    }

    /**
     * Get an array of view file paths.
     *
     * @return string[]
     */
    protected function getViewFiles()
    {
        return glob(base_path('resources/views').'/*.blade.php');
    }

    /**
     * Get the HTML from a file.
     *
     * @return string
     */
    protected function getHtmlFromFile(string $filePath)
    {
        return file_get_contents($filePath);
    }

    /**
     * Write HTML to a file.
     *
     * @return void
     */
    protected function writeHtmlToFile(string $filePath, string $html)
    {
        file_put_contents($filePath, $html);
    }
}
