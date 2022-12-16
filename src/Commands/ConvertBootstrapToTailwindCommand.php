<?php

namespace Zakarialabib\ConvertBootstrapToTailwind\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zakarialabib\ConvertBootstrapToTailwind\ConvertBootstrapToTailwind;

class ConvertBootstrapToTailwindCommand extends Command
{
    protected $signature = 'analyze:views {--change}';

    protected $description = 'Analyze view files and suggest Bootstrap to Tailwind CSS class name changes';

    public function handle(InputInterface $input, OutputInterface $output): int
    {
        $comparer = new ConvertBootstrapToTailwind();
    
        $viewFiles = $this->getViewFiles();
        foreach ($viewFiles as $viewFile) {
            $originalHtml = $this->getHtmlFromFile($viewFile);
            $modifiedHtml = $comparer->compare($originalHtml);
    
            if ($modifiedHtml !== $originalHtml) {
                $this->handleChangeOption($input, $output, $viewFile, $modifiedHtml);
            }
        }
    
        return 0;
    }
    
    protected function handleChangeOption(InputInterface $input, OutputInterface $output, string $viewFile, string $modifiedHtml): void
    {
        if ($input->getOption('change')) {
            $this->writeHtmlToFile($viewFile, $modifiedHtml);
            $output->writeln("Changed Bootstrap class names in $viewFile");
        } else {
            $output->writeln("Suggested changes for $viewFile:");
            $output->writeln($modifiedHtml);
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
     * @param  string  $filePath
     * @return string
     */
    protected function getHtmlFromFile(string $filePath)
    {
        return file_get_contents($filePath);
    }

    /**
     * Write HTML to a file.
     *
     * @param  string  $filePath
     * @param  string  $html
     * @return void
     */
    protected function writeHtmlToFile(string $filePath, string $html)
    {
        file_put_contents($filePath, $html);
    }

     // public function handle(): int
    // {
    //     $this->comment('All done');

    //     return self::SUCCESS;
    // }
}
