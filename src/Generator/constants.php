<?php

declare(strict_types=1);

const PACKAGE_NAMESPACE = 'SellingPartnerApi';

const ROOT_DIR = __DIR__.'/../..';
const GENERATED_DIR = ROOT_DIR.'/src';
const RESOURCE_DIR = ROOT_DIR.'/resources';
const MODEL_DIR = RESOURCE_DIR.'/models';
const METADATA_DIR = RESOURCE_DIR.'/metadata';
const TEMPLATE_DIR = RESOURCE_DIR.'/templates';
const DOCS_DIR = ROOT_DIR.'/docs';

const AUTOLOADER = ROOT_DIR.'/vendor/autoload.php';
const GENERATOR_CONFIG_FILE = RESOURCE_DIR.'/generator-config.json';

const CUSTOM_API_DIR = 'Apis';
const CUSTOM_MODEL_DIR = 'Models';
const DEFAULT_API_DIR = 'Api';
const DEFAULT_MODEL_DIR = 'Model';

const RESOURCE_FILE_SUFFIX = 'Api';

// const LOGFILE = __DIR__ . '/../generate.log';

// const MODEL_MODIFICATIONS_DIR = RESOURCE_DIR . '/schemas/modifications';
// // The attributes in this file are merged with any corresponding attributes in the models
// const SCHEMA_ADDITIONS_FILE = MODEL_MODIFICATIONS_DIR . '/additions.json';
// // The attributes in this file replace any corresponding attributes in the models
// const SCHEMA_REPLACEMENTS_FILE = MODEL_MODIFICATIONS_DIR . '/replacements.json';
// // The attributes in this file are removed from the models
// const SCHEMA_DELETIONS_FILE = MODEL_MODIFICATIONS_DIR . '/deletions.json';
