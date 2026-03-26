# Timeless Relocation - Professional Movers and Packers in Dubai

A complete, SEO-optimized static website for **Timeless Relocation**, a professional moving and relocation company based in Dubai, UAE.

**Live site:** [timelessrelocation.com](https://timelessrelocation.com)

---

## About the Project

Timeless Relocation is a movers and packers company serving all 7 UAE emirates and internationally. This website was built as a full branding and digital presence package by **Quartermasters FZC** (quartermasters.me), a digital solutions agency based in Ajman, UAE.

### Client
- **Company:** Timeless Relocation
- **Owner:** Bilal Talib
- **Industry:** Moving & Relocation Services
- **Location:** Dubai, UAE
- **Phone:** +971 56 865 4794
- **Email:** info@timelessrelocation.com

---

## Tech Stack

- **HTML5** - Semantic, accessible markup
- **CSS3** - Custom stylesheet with CSS variables, responsive grid, animations
- **JavaScript** - Vanilla JS (no frameworks or libraries)
- **PHP** - Contact form email handler
- **Hosting:** Hostinger (static HTML + PHP mail)
- **Domain:** timelessrelocation.com
- **Design System:** Navy (#0F2B46) + Gold (#D4943A), Outfit font

---

## Pages (11 total)

| Page | File | Description |
|------|------|-------------|
| Home | `index.html` | Hero, services grid, why choose us, locations, CTA, testimonials |
| About | `about.html` | Company story, team, mission, values |
| Contact | `contact.html` | Contact form (PHP email), info cards, Google Maps |
| Gallery | `gallery.html` | 51-photo gallery with custom lightbox |
| 404 | `404.html` | Custom error page |
| Movers & Packers | `services/movers-and-packers.html` | Full packing and moving service |
| House Movers | `services/house-movers.html` | Studio/apartment (photo assessment) + large home (site visit) tiers, handyman services |
| Villa Movers | `services/villa-movers.html` | Luxury villa relocation, mandatory site visit, full assembly included |
| Commercial | `services/commercial-relocation.html` | Office moving, mandatory site visit, client designates items |
| Storage | `services/storage-services.html` | Dubai facility, 50/100/200 sq ft cabins, personal locks, 24/7 security |
| International | `services/international-relocation.html` | Door-to-door cargo: Gulf, UK, USA, 26 Schengen countries |

---

## SEO Features

- Unique meta titles and descriptions per page
- Open Graph and Twitter Card tags
- Schema.org JSON-LD (MovingCompany, Service, HowTo, FAQPage, BreadcrumbList)
- Canonical URLs
- XML Sitemap (`sitemap.xml`)
- robots.txt
- Semantic HTML with proper heading hierarchy
- Image alt texts and lazy loading
- FAQ structured data for Google rich results

---

## Features

- Fully responsive (desktop, tablet, mobile)
- Mobile hamburger menu with slide-out drawer
- Scrolling ticker/marquee (cities on home, service messages on other pages)
- Animated scroll reveal effects
- Interactive FAQ accordions on service pages
- Photo gallery with pure CSS/JS lightbox (no dependencies)
- Contact form sends email via PHP (with WhatsApp fallback prompt)
- WhatsApp floating button on all pages
- Cross-linked navigation across all 11 pages
- 6 services in dropdown nav + footer on every page

---

## Project Structure

```
timelessrelocation.com/
|-- index.html                  # Homepage
|-- about.html                  # About Us
|-- contact.html                # Contact with email form
|-- gallery.html                # Photo gallery + lightbox
|-- 404.html                    # Custom error page
|-- send-inquiry.php            # PHP contact form handler
|-- robots.txt                  # Search engine directives
|-- sitemap.xml                 # XML sitemap (all 11 pages)
|-- css/
|   |-- style.css               # Main stylesheet
|-- js/
|   |-- main.js                 # Navbar, mobile menu, FAQ, animations
|-- images/
|   |-- Timeless_Logo.png       # Transparent logo
|   |-- hero-banner.png         # Homepage hero image
|   |-- about-team.png          # About page image
|   |-- movers-packers.png      # Service card image
|   |-- house-movers.png        # Service card image
|   |-- villa-movers.png        # Service card image
|   |-- commercial-relocation.png
|   |-- storage-services.png
|   |-- international-relocation.png
|   |-- gallery/                # 51 client project photos
|-- services/
|   |-- movers-and-packers.html
|   |-- house-movers.html
|   |-- villa-movers.html
|   |-- commercial-relocation.html
|   |-- storage-services.html
|   |-- international-relocation.html
|-- addon-Deliverables/         # Client deliverables (not deployed)
|   |-- Branding/               # Cards, palette, letterhead, QM logos
|   |-- Email/                  # Email setup docs
|   |-- Payment/                # Receipts, invoices, ledger
|   |-- Quotation/              # Project quotation
|-- docs/                       # Internal project docs
```

---

## Build Timeline

### March 22, 2026 - Project Start
- Initial website build with 4 design samples
- Client selected **Sample 2 (Modern Minimal)** - Navy + Gold theme
- Built homepage, about, contact, 5 service pages, 404
- Set up SEO (meta tags, schema markup, sitemap, robots.txt)
- Created images using AI generation

### March 23, 2026 - Branding Package
- Brand palette and guidelines (SVG + PDF)
- 5 business card variations
- Letterhead design
- Quotation document (QM-2026-0042)

### March 25, 2026 - Hosting & Domain
- Domain timelessrelocation.com transferred to Hostinger
- DNS configured (ALIAS + CNAME)
- FTP deployment setup
- First push of homepage + assets to live server
- Business email (info@timelessrelocation.com) created on Hostinger

### March 26, 2026 - Major Update & Launch
- **Content rewrite** based on client's actual workflow:
  - House movers: split into small (photo assessment) and large (site visit) tiers, added handyman services
  - Villa movers: mandatory site visit emphasis, assembly as standard
  - Commercial: removed false IT handling claims, client designates items
  - Storage: specific Dubai facility details, cabin sizes (50/100/200 sqft), personal locks, payment terms
- **New page:** International Relocation (door-to-door cargo to Gulf, UK, USA, Schengen)
- **Gallery page** rebuilt with 51 photos and custom lightbox
- **Contact form** connected to PHP mailer (sends to info@timelessrelocation.com)
- Navigation updated across all 11 pages (Gallery + International Relocation added)
- Sitemap updated with all pages
- New transparent logo deployed (100KB vs 1.1MB)
- Mobile menu fixed (hamburger button, backdrop overlay)
- Full project cleanup and folder reorganization
- All pages pushed to live FTP server
- Client name corrected to Bilal Talib across all documents

---

## Development Approach

This project was built using a collaborative AI-assisted workflow:
- **Claude Code (Opus 4.6)** - Primary development: HTML, CSS, JS, SEO, content writing, FTP deployment, project management
- **Gemini** - Image generation, CSS debugging (mobile backdrop fix), design assistance
- **Human direction** - Client communication, design decisions, content review, quality assurance

All code is hand-written HTML/CSS/JS with no frameworks, build tools, or dependencies. The site loads fast and works without JavaScript for core content.

---

## Hosting & Deployment

- **Platform:** Hostinger (shared hosting)
- **Deployment:** FTP upload to public_html
- **SSL:** Provided by Hostinger
- **Email:** Hostinger business email (info@timelessrelocation.com)
- **No build step** - files are deployed as-is

---

## Built By

**Quartermasters FZC**
Digital Solutions & Branding Agency
Ajman, UAE
[quartermasters.me](https://quartermasters.me) | hello@quartermasters.me
