
---

## 🖼️ Image Management

- Only **essential images** (e.g., `configurations/dynamic/assets/img`) are included.
- All other heavy assets (e.g., demo images, mockups, large PSDs) are excluded via `.gitignore`.
- You can update these image rules via `.gitattributes` and `.gitignore`.

---

## 🌐 Project Dashboard

> 📂 [Open the Project Dashboard](index.html)

This file (`index.html`) provides an interactive way to browse:
- UI versions
- Apps and templates
- Presentation and designs
- Configurable layouts

The dashboard is **auto-generated** via a script that detects folders and builds navigation.

---

## 🔧 How to Use / Clone

```bash
# Clone this repo
git clone https://github.com/yourusername/corleone-forged.git
cd corleone-forged

# Optional: enable LFS if using large files
git lfs install
git lfs pull

# Run project locally (if needed)
open index.html
