<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '3.0.4',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'jamesedmonston/graphql-authentication' => 
  array (
    'class' => 'jamesedmonston\\graphqlauthentication\\GraphqlAuthentication',
    'basePath' => $vendorDir . '/jamesedmonston/graphql-authentication/src',
    'handle' => 'graphql-authentication',
    'aliases' => 
    array (
      '@jamesedmonston/graphqlauthentication' => $vendorDir . '/jamesedmonston/graphql-authentication/src',
    ),
    'name' => 'GraphQL Authentication',
    'version' => '2.5.0',
    'description' => 'GraphQL authentication for your headless Craft CMS applications.',
    'developer' => 'James Edmonston',
    'developerUrl' => 'https://github.com/jamesedmonston',
    'documentationUrl' => 'https://github.com/jamesedmonston/graphql-authentication/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/jamesedmonston/graphql-authentication/master/CHANGELOG.md',
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '3.0.7',
    'description' => 'Manage your fields and field groups with ease.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/field-manager',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-4/CHANGELOG.md',
  ),
  'robuust/craft-mailjet' => 
  array (
    'class' => 'robuust\\mailjet\\Plugin',
    'basePath' => $vendorDir . '/robuust/craft-mailjet/src',
    'handle' => 'mailjet-adapter',
    'aliases' => 
    array (
      '@robuust/mailjet' => $vendorDir . '/robuust/craft-mailjet/src',
    ),
    'name' => 'Mailjet Adapter',
    'version' => '1.0.2',
    'description' => 'Mailjet integration for Craft CMS',
    'developer' => 'Robuust',
    'developerUrl' => 'https://robuust.digital/',
    'developerEmail' => 'support@robuust.digital',
    'documentationUrl' => 'https://github.com/robuust/craft-mailjet/blob/v1/README.md',
  ),
  'craftcms/feed-me' => 
  array (
    'class' => 'craft\\feedme\\Plugin',
    'basePath' => $vendorDir . '/craftcms/feed-me/src',
    'handle' => 'feed-me',
    'aliases' => 
    array (
      '@craft/feedme' => $vendorDir . '/craftcms/feed-me/src',
    ),
    'name' => 'Feed Me',
    'version' => '5.2.0',
    'description' => 'Import content from XML, RSS, CSV or JSON feeds into entries, categories, Craft Commerce products, and more.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://docs.craftcms.com/feed-me/v4/',
  ),
  'verbb/comments' => 
  array (
    'class' => 'verbb\\comments\\Comments',
    'basePath' => $vendorDir . '/verbb/comments/src',
    'handle' => 'comments',
    'aliases' => 
    array (
      '@verbb/comments' => $vendorDir . '/verbb/comments/src',
    ),
    'name' => 'Comments',
    'version' => '2.0.7',
    'description' => 'Add comments to your site.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/comments',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/comments/craft-4/CHANGELOG.md',
  ),
);
