<?php

namespace Tiime\EN16931\Codelist\Generator;

final class XlsxReaderResultItem
{
    public function __construct(
        public readonly string $name,
        public readonly string $value,
    ) {
    }

    public function __toString(): string
    {
        return sprintf("case %s = '%s';", $this->name, $this->value);
    }
}
