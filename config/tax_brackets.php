<?php
// config/tax_brackets.php

/**
 * Federal Tax Brackets for different filing statuses.
 *
 * The values below are approximate estimates based on the current tax year.
 * Note: Tax brackets differ by filing status, and these values may change over time.
 * Users should verify with official sources or consult a tax professional for precise rates.
 */

return [
    'single' => [
        ['threshold' => 11600, 'rate' => 10],
        ['threshold' => 47150, 'rate' => 12],
        ['threshold' => 100525, 'rate' => 22],
        ['threshold' => 191950, 'rate' => 24],
        ['threshold' => 243725, 'rate' => 32],
        ['threshold' => 609350, 'rate' => 35],
        ['threshold' => 999999999, 'rate' => 37],
    ],
    'married_filing_jointly' => [
        ['threshold' => 23200, 'rate' => 10],
        ['threshold' => 94300, 'rate' => 12],
        ['threshold' => 201050, 'rate' => 22],
        ['threshold' => 383900, 'rate' => 24],
        ['threshold' => 487450, 'rate' => 32],
        ['threshold' => 731200, 'rate' => 35],
        ['threshold' => 999999999, 'rate' => 37],
    ],
    'head_of_household' => [
        // Example values; these should be adjusted to current IRS guidelines.
        ['threshold' => 16400, 'rate' => 10],
        ['threshold' => 55900, 'rate' => 12],
        ['threshold' => 89050, 'rate' => 22],
        ['threshold' => 170050, 'rate' => 24],
        ['threshold' => 215950, 'rate' => 32],
        ['threshold' => 539900, 'rate' => 35],
        ['threshold' => 999999999, 'rate' => 37],
    ],
    'married_filing_separately' => [
        // Example values; adjust as needed.
        ['threshold' => 11600, 'rate' => 10],
        ['threshold' => 47150, 'rate' => 12],
        ['threshold' => 100525, 'rate' => 22],
        ['threshold' => 191950, 'rate' => 24],
        ['threshold' => 243725, 'rate' => 32],
        ['threshold' => 365600, 'rate' => 35],
        ['threshold' => 999999999, 'rate' => 37],
    ],
];
