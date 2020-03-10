<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://idp.sust.com/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://idp.sust.com/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.sust.com/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.sust.com/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIEpzCCAw+gAwIBAgIJAN8iHxqPjwPcMA0GCSqGSIb3DQEBCwUAMGoxCzAJBgNVBAYTAkJEMQ8wDQYDVQQIDAZTeWxoZXQxFTATBgNVBAcMDERlZmF1bHQgQ2l0eTEcMBoGA1UECgwTRGVmYXVsdCBDb21wYW55IEx0ZDEVMBMGA1UEAwwMaWRwLnN1c3QuY29tMB4XDTIwMDMxMDE0NTUwOFoXDTMwMDMxMDE0NTUwOFowajELMAkGA1UEBhMCQkQxDzANBgNVBAgMBlN5bGhldDEVMBMGA1UEBwwMRGVmYXVsdCBDaXR5MRwwGgYDVQQKDBNEZWZhdWx0IENvbXBhbnkgTHRkMRUwEwYDVQQDDAxpZHAuc3VzdC5jb20wggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQD64+BGGXcp2ith74TgZ8g77w/ve/8CnNT5uJz9iYvNJEve7ZjvrBddj+dm3zjkTMYLRW1QFC0bsJ0W7GlwidDYo97Zjbqllzb22iiqGTUwTUqZwvflCU0XuJvGkznZrBiiK7LkVBWWauKNeywB+c001pgg4BXppFdW0+UpjMg1M7GPrNWTJTyiQAqRYj+XaWHkX/P5gAVGPmLh6nbjSqTsecijcARfnFgMZ9n43xDllI0Yvo4XNhosl2udLXafEH+nkhv7kLJ7224pB2PLZO73dLB7b8tcxPqi1lWbP5Dg8PwLDhfs0wD10pG2vkc0Hn/R1veAuZt9R0vDZSLrHj9rd0u5+fkneGLqbQCrCYBUyGEWJiHOhm3TUHhKrexAbv29aIHD9g3UuFbCf3FcbqI4M8MFBHtd/BpUDQqOW7F1vPJCsRjFjRnzJ2YMuJIkxGPFEr0sLmOPEW6uWVRMDN/IBjNCxViz3FleKXVbEQarTBA99ZNTxfqeEZgZ2u54J2UCAwEAAaNQME4wHQYDVR0OBBYEFJ5bPnuhdnVKCokDLvrDpKFqYRkCMB8GA1UdIwQYMBaAFJ5bPnuhdnVKCokDLvrDpKFqYRkCMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBALu4mB2tNd/+dnarl8TFtFB8j621kUCD27bmezUxAbIkop9LB1sapkcn7IzZMHZBYVzWA+lQZgKr5ma10yDnOFbsEsW6rFNg99Ne2ivop6E7b2idnRCXC79wdlUT9/aWNVJJxyYIXCA367CoiA5Z69ePnDIHqxzxMru9x2z6YQhxdY03YT6QxX1DwLUSIY4VBE88PPcVuCVX7YbuTzG1KFLmTcUvFI4i16LomJg4Lxwaz+agv4zdKYGeuqwwgH8Wq7gBXmofdMd5MCXskN4PVW9/1sPlpubVTfBLmIVbrTYck6xTtgzsiS6XraTFgsZK8MoZJE7x59ei9eIVOSgyaO3D/mbeOkXTN5RYhGdUrO9jR+VlESLqPJf7BKStkzh9wBZWAWw6wQk1syQUcIW+6WSYLRaWxWvftq7z5IqeC814RypQ/DQ3bpKWH6yfpqzuLiW5LJBbcSvsn7GlhMImrZeqKMeRnGAOx+U55nXENJJwI9uPkLcDgrOzEhtOoCwupA==',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'contacts' => 
  array (
    0 => 
    array (
      'emailAddress' => 'admin@example.org',
      'contactType' => 'technical',
      'givenName' => 'Administrator',
    ),
  ),
);
