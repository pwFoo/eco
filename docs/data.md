## Data Classes
Eco includes several data classes: `eco::filter()`, `eco::format()` and `eco::validate()`.

### Filter Class
The Filter class filters values and removes unwanted characters. The available methods are:
- `alnum($value, $allow_whitespaces)`
- `alpha($value, $allow_whitespaces)`
- `date($value)`
- `dateTime($value)`
- `decimal($value)`
- `email($value)`
- `htmlEncode($value)`
- `numeric($value)`
- `sanitize($value)`
- `time($value)`
- `word($value, $allow_whitespaces)`

### Format Class
The Format class formats data. The format methods are:
- `base64UrlDecode($value)`
- `base64UrlEncode($value)`
- `byte($value, $characters)`
- `currency($value, $format)` - default format set by `eco::format()->default_format_currency`
- `date($value, $format)` - default format set by `eco::format()->default_format_date`
- `dateRelative($value, $value_compare, $format)`
- `dateTime($value, $format)` - default format set by `eco::format()->default_format_date_time`
- `nameKey($value, $additional_allowed_chars)`
- `password($password, $algorithm)`
- `time($value, $format)` - default format set by `eco::format()->default_format_time`
- `timeElapsed($time_elapsed, $characters, $auto_trim_singulars)`

### Validate Class
The Validate class helps with data validation. The validate methods are:
- `alnum($value, $allow_whitespaces)`
- `alpha($value, $allow_whitespaces)`
- `between($value, $min, $max)`
- `contains($value, $contain_value, $case_insensitive)`
- `containsNot($value, $contain_not_value, $case_insensitive)`
- `decimal($value)`
- `email($value)`
- `hash($internal_string, $input_string)`
- `ipv4($value)`
- `ipv6($value)`
- `length($value, $min, $max, $exact)`
- `match($value, $compare_value, $case_insensitive)`
- `numeric($value)`
- `password($password, $hash)`
- `regexPattern($pattern)`
- `required($value)`
- `url($value)`
- `word($value, $allow_whitespaces)`