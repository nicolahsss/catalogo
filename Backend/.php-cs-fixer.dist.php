<?php

/**
 * @package   Catalogo Simples
 * @author    Nícola Serafim <nicola@seraf.im>
 * @copyright 2025 Nícola Serafim
 * @license   MIT License
 * @link      http://www.pnhs.com.br
 */

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
  ->in(__DIR__)
  ->exclude('vendor');

return (new PhpCsFixer\Config())
  ->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
  ])
  ->setFinder($finder);
