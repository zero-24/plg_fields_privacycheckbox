# PrivacyCheckbox Plugin

This Joomla plugin lets you create new fields of type 'privacycheckbox' in any extensions where custom fields are supported.

## Sponsoring and Donation

You want to support my work for the [development of my extensions](https://extensions.joomla.org/profile/profile/details/200189/) and my work for the [Joomla! Project](https://volunteers.joomla.org/joomlers/248-tobias-zulauf) you can give something back and sponsor me. 

There are two ways to support me right now:
- This extension is part of [Github Sponsors](https://github.com/sponsors/zero-24/) by sponsoring me, you help me continue my oss work for the [Joomla! Project](https://volunteers.joomla.org/joomlers/248-tobias-zulauf), write bug fixes, improving features and maintain my extensions.
- You just want to send me an one-time donation? Great you can do this via [PayPal.me/zero24](https://www.paypal.me/zero24).

Thanks for your support!

## Feature

This plugin allows you to creates a single checkbox field in any form that supports custom fields e.g. in the contact form where you can make sure the privacy message is checked. But this also allow any other single checkbox usecase. Over the core plugin this allows to use a `<a>` tag inside of the message to be shown to the user. Any other html tag is going to be removed.

## Configuration

### Initial setup the plugin with the example for the contact form

- Download the latest version of the plugin: https://github.com/zero-24/plg_fields_privacycheckbox/releases/latest
- Install & Enable the plugin
- Create a new custom field for the email form of the contact component
 - Components -> Contacts -> Fields
 - Select the contect `Mail` from the dropdown
 - Create the custom field using `New`
 - Set the desired title for the field
 - Set the type to `privacycheckbox`
 - Add your desired text to the `Checkbox Note` field (You can include links using the `<a>` tag)
 - Add your desired text to the `Email Text` field
 - Go to the permission tab and allow `Public` to `Edit Custom Field Value`
 - `Save & Close`
 - See the Joomla Core Contact Form extended with our consent field

### Option descriptions

##### Checkbox Note

This is the message showed next to the checkbox containing your message about privacy.

##### Email Text

This is the message included in the email send to the user next to the custom field. Per default it is just `checked`.

### Implement multilanguage

This field support two different ways to be translated into different languages.

##### Using a language string

For the checkbox note you can add any string you want and override them with the desired text foreach language.

For example for the `Checkbox Note` text:
- Enter the self defined Language Constant `PLG_FIELDS_PRIVACYCHECKBOX_CUSTOM_CONTENT` (it works with any string)
- Go to the Language Overrider: Extensions -> Language(s) -> Overrides.
- Select your desired target language
- Create the Language Constant by using `New`
- The field `Language Constant` contain the constant we set in the plugin settings
- The field `Text` contain the override per language.
- `Save & Close`
- Select the next language and so on.

The plugin read the translation from the overrides and fallback to the en-GB value.

##### Using the language assignment field

As this plugin is a fields plugin you can assign a language to the field. So in case of multilanguage you can create a field that is assigned to de-DE and another one that is assigned to en-GB with the desired texts configured in the plugin.

### Global Plugin Options

All field plugins have the possibility to be configured with global default options.

To configure this please go to the Plugin Configuration:
- Extensions -> Plugins
- Use the search tools to filter for `Type` == `fields`
- You will find the `Fields - Privacy Checkbox` plugin
- Edit the plugin

There you find both the `Checkbox Note` and the `Email Text` field to be configured globally.

### Update Server

Please note that my update server only supports the latest version running the latest version of Joomla and atleast PHP 7.0.
Any other plugin version I may have added to the download section don't get updates using the update server.

## Issues / Pull Requests

You have found an Issue, have a question or you would like to suggest changes regarding this extension?
[Open an issue in this repo](https://github.com/zero-24/plg_fields_privacycheckbox/issues/new) or submit a pull request with the proposed changes.

## Translations

You want to translate this extension to your own language? Check out my [Crowdin Page for my Extensions](https://joomla.crowdin.com/zero-24) for more details. Feel free to [open an issue here](https://github.com/zero-24/plg_fields_privacycheckbox/issues/new) on any question that comes up.

## Joomla! Extensions Directory (JED)

This plugin can also been found in the Joomla! Extensions Directory: [PrivacyCheckbox by zero24](https://extensions.joomla.org/extension/authoring-a-content/custom-fields/privacycheckbox/)

## Release steps

- `build/build.sh`
- `git commit -am 'prepare release PrivacyCheckbox 1.0.x'`
- `git tag -s '1.0.x' -m 'PrivacyCheckbox 1.0.x'`
- `git push origin --tags`
- create the release on GitHub
- `git push origin master`

## Crowdin

### Upload new strings

`crowdin upload sources`

### Download translations

`crowdin download --skip-untranslated-files --ignore-match`
