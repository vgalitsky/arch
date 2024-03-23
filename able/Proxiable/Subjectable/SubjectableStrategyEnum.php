<?php
namespace Cl\Able\Proxiable\Subjectable;

enum SubjectableStrategyEnum: string
{
    case SINGLETON = 'singleton';
    case FETCH_NEW = 'fetchNew';
}