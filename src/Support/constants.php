<?php declare(strict_types=1);

const AUTOLOADER = __DIR__ . '/../vendor/autoload.php';

const VALID_OPTS = ['category::', 'country::', 'api-code::', 'help'];
const YES_INPUTS = ['y', 'yes'];

const RESOURCE_DIR = __DIR__ . '/../../resources';
const MODEL_DIR = RESOURCE_DIR . '/schemas/models';
const TEMPLATE_DIR = RESOURCE_DIR . '/templates';
const DOCS_DIR = __DIR__ . '/../../docs';

// const CUSTOM_API_DIR = 'Apis';
// const CUSTOM_MODEL_DIR = 'Models';
// const DEFAULT_API_DIR = 'Api';
// const DEFAULT_MODEL_DIR = 'Model';

// const LOGFILE = __DIR__ . '/../generate.log';

// const MODEL_MODIFICATIONS_DIR = RESOURCE_DIR . '/schemas/modifications';
// // The attributes in this file are merged with any corresponding attributes in the models
// const SCHEMA_ADDITIONS_FILE = MODEL_MODIFICATIONS_DIR . '/additions.json';
// // The attributes in this file replace any corresponding attributes in the models
// const SCHEMA_REPLACEMENTS_FILE = MODEL_MODIFICATIONS_DIR . '/replacements.json';
// // The attributes in this file are removed from the models
// const SCHEMA_DELETIONS_FILE = MODEL_MODIFICATIONS_DIR . '/deletions.json';
