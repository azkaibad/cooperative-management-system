---
name: Corporate Trust & Stability
colors:
  surface: '#f9f9ff'
  surface-dim: '#cfdaf1'
  surface-bright: '#f9f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f0f3ff'
  surface-container: '#e7eeff'
  surface-container-high: '#dee8ff'
  surface-container-highest: '#d8e3fa'
  on-surface: '#111c2c'
  on-surface-variant: '#434653'
  inverse-surface: '#263142'
  inverse-on-surface: '#ebf1ff'
  outline: '#737784'
  outline-variant: '#c3c6d5'
  surface-tint: '#215abd'
  primary: '#00357f'
  on-primary: '#ffffff'
  primary-container: '#004aad'
  on-primary-container: '#a9c1ff'
  inverse-primary: '#b0c6ff'
  secondary: '#505d84'
  on-secondary: '#ffffff'
  secondary-container: '#c3d0fe'
  on-secondary-container: '#4b597f'
  tertiary: '#34393c'
  on-tertiary: '#ffffff'
  tertiary-container: '#4b5053'
  on-tertiary-container: '#bec2c6'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d9e2ff'
  primary-fixed-dim: '#b0c6ff'
  on-primary-fixed: '#001945'
  on-primary-fixed-variant: '#00429b'
  secondary-fixed: '#dae2ff'
  secondary-fixed-dim: '#b8c5f2'
  on-secondary-fixed: '#0a1a3d'
  on-secondary-fixed-variant: '#38466b'
  tertiary-fixed: '#dfe3e7'
  tertiary-fixed-dim: '#c3c7cb'
  on-tertiary-fixed: '#171c1f'
  on-tertiary-fixed-variant: '#43474b'
  background: '#f9f9ff'
  on-background: '#111c2c'
  surface-variant: '#d8e3fa'
typography:
  display-lg:
    fontFamily: Hanken Grotesk
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.2'
  headline-lg:
    fontFamily: Hanken Grotesk
    fontSize: 32px
    fontWeight: '700'
    lineHeight: '1.3'
  headline-md:
    fontFamily: Hanken Grotesk
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Work Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Work Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.5'
  label-md:
    fontFamily: Work Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: 0.05em
  headline-lg-mobile:
    fontFamily: Hanken Grotesk
    fontSize: 28px
    fontWeight: '700'
    lineHeight: '1.3'
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  container-max: 1200px
  gutter: 1.5rem
  section-padding: 5rem
  stack-sm: 0.5rem
  stack-md: 1rem
  stack-lg: 2rem
---

## Brand & Style

This design system is rooted in **Corporate / Modern** aesthetics, specifically tailored for the finance and cooperative sector. The brand personality is professional, reliable, and transparent, aiming to evoke a sense of security and community growth.

The visual style leverages clean layouts, ample white space, and a structured information hierarchy. It avoids unnecessary decorative elements, favoring functional clarity and a high-trust atmosphere. Subtle geometric patterns (like dot grids) are used sparingly to add a technical, modern layer to the otherwise traditional corporate blue-and-white foundation.

## Colors

The palette is dominated by a range of blues to establish authority and trust.

- **Primary Blue (#004AAD):** Used for actionable items, brand accents, and key headers to draw focus.
- **Deep Navy (#1D2B4F):** Applied to top bars and primary headings for a grounded, institutional feel.
- **Tonal Neutrals:** A series of grays are used for body text and labels to ensure high legibility.
- **Surface Grays (#F0F4F8):** Soft backgrounds are used to differentiate content sections without breaking the clean, light flow.

## Typography

The system utilizes two distinct sans-serif families to balance modern precision with professional readability. 

**Hanken Grotesk** is the primary choice for headlines and large display text, providing a sharp, contemporary edge. **Work Sans** is used for body copy and administrative labels, offering a neutral and highly legible experience across all device sizes. Headlines should typically use tighter letter spacing, while small labels should be slightly tracked out for clarity.

## Layout & Spacing

The design system employs a **Fixed Grid** model for desktop, transitioning to a fluid layout for mobile devices. 

- **Desktop:** A 12-column grid with a maximum container width of 1200px. Sections are defined by generous vertical padding (80px - 100px) to give content "room to breathe."
- **Tablet:** 8-column grid with reduced margins (32px).
- **Mobile:** Single column layout with 16px side margins. 

The vertical rhythm follows a 4px/8px baseline, ensuring that spacing between related elements (labels and inputs) is consistently tighter than the spacing between unrelated sections.

## Elevation & Depth

Hierarchy is established through **Tonal Layers** and **Ambient Shadows** rather than heavy borders.

- **Level 0 (Surface):** The base background, typically white or very light gray.
- **Level 1 (Cards):** Floating white containers (like the stat cards) utilize a soft, highly diffused shadow (0px 10px 30px rgba(0, 74, 173, 0.08)) to appear elevated and interactive.
- **Level 2 (Active Elements):** Primary buttons and active states use a more pronounced shadow to indicate clickability.
- **Subtle Outlines:** Light gray borders (1px) are used for secondary input fields and containers to maintain structure without adding visual weight.

## Shapes

The design uses a **Rounded** shape language to soften the corporate aesthetic and appear more approachable. 

Primary containers and image frames utilize a 0.5rem (8px) radius. Buttons and decorative icons follow a similar logic, with cards often utilizing a slightly larger radius (1rem) to emphasize their role as distinct modules of information. Circular icons are used exclusively for category badges or feature highlights.

## Components

### Buttons
- **Primary:** Solid Blue (#004AAD) background with white text. Slightly rounded corners (8px) and a subtle hover lift.
- **Secondary:** Outlined Blue with 1px stroke. Used for less critical actions like "Learn More."
- **Icon Buttons:** Blue background with white centered icons, used for specialized actions like "Login."

### Trust Cards (Stat Cards)
- White background with high-diffusion shadow.
- Vertical layout: Icon -> Large Blue Number -> Label -> Description.
- Separated by thin, light-gray vertical dividers when grouped in a row.

### Input Fields
- Soft gray background or 1px border.
- 8px corner radius.
- Placeholder text in Neutral gray.

### Feature Blocks
- Iconography should be minimalist and monolinear, utilizing the primary brand blue.
- Content is grouped in a horizontal or vertical stack with consistent 1rem spacing between the icon and text.