<?php

namespace Brendt\Stitcher\Parser;

use Brendt\Stitcher\Exception\ParserException;
use Brendt\Stitcher\Factory\ParserFactory;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * The JsonParser take a path to one or more JSON files, and parses the content into an array.
 */
class JsonParser extends AbstractArrayParser
{
    private $srcDir;

    public function __construct(ParserFactory $parserFactory, string $srcDir) {
        parent::__construct($parserFactory);

        $this->srcDir = $srcDir;
    }

    public function parse($path = '*.json') {
        if (!strpos($path, '.json')) {
            $path .= '.json';
        }

        $data = [];
        /** @var SplFileInfo[] $files */
        $files = Finder::create()->files()->in($this->srcDir)->path($path);

        foreach ($files as $file) {
            $parsed = json_decode($file->getContents(), true);

            if (json_last_error() > 0 && $error = json_last_error_msg()) {
                throw new ParserException("{$file->getRelativePathname()}: {$error}");
            }

            if (!isset($parsed['entries'])) {
                $id = str_replace(".{$file->getExtension()}", '', $file->getFilename());
                $parsed = ['entries' => [$id => $parsed]];
            }

            $data += $parsed['entries'];
        }

        $data = $this->parseArrayData($data);

        return $data;
    }
}
