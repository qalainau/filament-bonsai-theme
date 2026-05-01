# Bonsai Theme

Japanese-style high-density UI theme for Filament v5.

Inspired by Japanese sales management systems (販売管理), inventory management (在庫管理), and order management (受注管理) applications that prioritize information density and compact form layouts.

## Installation

```bash
composer require because/bonsai-theme
```

## Usage

Register the plugin in your panel provider:

```php
use Because\BonsaiTheme\BonsaiThemePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugin(BonsaiThemePlugin::make());
}
```

No Tailwind build required. The theme ships as pre-compiled CSS and is loaded automatically.

## Features

- **Japanese font stack** — Noto Sans JP, Hiragino Kaku Gothic ProN, Hiragino Sans, Meiryo
- **Zero-gap form fields** — No spacing between fields for maximum information density
- **Compact inputs** — Reduced padding and font size (13px) across all input types: TextInput, Select, Textarea, DatePicker, and more
- **Tight field labels** — 12px labels with minimal gap to input
- **Compact sections** — Reduced padding in Section, Fieldset, and Tabs
- **Dense tables** — Minimal cell padding, 11px uppercase headers, compact row height
- **Compact table chrome** — Tight toolbar, filter panels, pagination, and indicators
- **Small buttons & badges** — Reduced padding and font size
- **Compact sidebar** — Smaller nav items with uppercase group labels
- **Compact repeaters** — Minimal gap and padding for inline editing
- **Compact modals** — Reduced content padding
- **Sharp input borders** — 1px border with small border-radius, no shadow
- **Dark mode support** — All overrides include dark mode variants

## What It Changes

### Form Fields

| Component | Default | Bonsai |
|---|---|---|
| Field gap | `gap-6` | `0` |
| Input padding | `py-1.5 px-3` | `py-0.5 px-2` |
| Input font | `text-sm` (14px) | `13px` |
| Label font | `text-sm` | `12px` |
| Label-to-input gap | `gap-y-2` | `0` |
| Section content | `p-6` | `p-3` |
| Fieldset padding | `p-6` | `p-3` |
| Input border-radius | `rounded-lg` | `rounded` (4px) |

### Tables

| Component | Default | Bonsai |
|---|---|---|
| Column padding | `py-4 px-3` | `py-0.125rem px-0.25rem` |
| Header padding | `py-3.5 px-3` | `py-0.125rem px-0.25rem` |
| Header font | `text-sm` | `11px` uppercase |
| Text column | `text-sm` | `13px` |
| Toolbar padding | `p-4 sm:px-6` | `0.25rem 0.5rem` |
| Pagination | `py-3 px-3` | `0.25rem 0.5rem` |
| Container radius | `rounded-xl` | `rounded-md` (6px) |

### Global

| Component | Default | Bonsai |
|---|---|---|
| Base font | 14px | 13px |
| Page content gap | `gap-y-8` | `gap-y-2` |
| Button font | 14px | 13px |
| Badge font | — | 11px |
| Sidebar item | — | 13px, compact padding |
| Modal content | `p-6` | `p-3` |

## Supported Filament Components

All standard Filament form fields and table columns are styled:

**Form Fields:** TextInput, Select (native & JS), Textarea, DatePicker, DateTimePicker, Toggle, Checkbox, Radio, ToggleButtons, CheckboxList, ColorPicker, TagsInput, Slider, KeyValue, RichEditor, MarkdownEditor, CodeEditor, FileUpload, Repeater

**Table Columns:** TextColumn, IconColumn, ColorColumn, ToggleColumn, CheckboxColumn, ImageColumn

**Layout:** Section, Fieldset, Tabs, Grid, Flex

## Requirements

- PHP 8.2+
- Filament v5
- Laravel 13.x

## License

MIT
