<?php

namespace App\Services;

class PostcodeService
{
    public function readCsv(string $filepath): array
    {
        $file = array_map(fn(string $row) => trim($row), file($filepath));

        return array_values(array_filter($file));
    }

    public function buildPossiblePostcodes(array $prefixes): array
    {

        /**
         * This method does not account for the London postcodes that use extra letters on the end of the
         * outcode -> this is a deliberate choice.
         */

        $incodes = $this->createIncodes();

        $possiblePostcodes = [];

        foreach ($prefixes as $prefix) {
            $outcodes = $this->createOutcodes($prefix);

            $prefixGroup = [];

            foreach ($outcodes as $outcode) {
                foreach ($incodes as $incode) {
                    $postcode = sprintf('%s %s', $outcode, $incode);
                    $prefixGroup[] = $postcode;
                }
            }
            $possiblePostcodes[$prefix] = $prefixGroup;
        }

        return $possiblePostcodes;

    }

    private function createOutcodes(string $prefix): array
    {
        $outcodes = [];

        $outcodeNumbers = range(1, 99);

        foreach ($outcodeNumbers as $number) {
            $outcodes[] = sprintf('%s%s', $prefix, $number);
        }

        return $outcodes;
    }

    private function createIncodes(): array
    {
        $incodeNumbers = range(1, 9);

        $letterPairs = $this->createLetterPairs();

        $incodes = [];

        foreach ($incodeNumbers as $incodeNumber) {
            foreach ($letterPairs as $letterPair) {
                $incodes[] = sprintf('%s%s', $incodeNumber, $letterPair);
            }
        }

        return $incodes;
    }

    public function createLetterPairs(): array
    {
        $letters = range('A', 'Z');

        $letterPairs = [];

        foreach ($letters as $letter1) {
            foreach ($letters as $letter2) {
                $letterPairs[] = sprintf('%s%s', $letter1, $letter2);
            }
        }
        return $letterPairs;
    }
}
