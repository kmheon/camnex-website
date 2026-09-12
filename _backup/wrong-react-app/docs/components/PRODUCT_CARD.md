# Product Card Specification

## Purpose
Renders individual surveillance hardware entries (Dome, Bullet, PTZ, Solar, NVR) in the catalog grid.

## Fields & Interactivity
- **Hardware Photography**: High-resolution image preview with hover scale effect.
- **Badges**: Status badges (Best Seller, Active Deterrence, Enterprise Flagship, 100% Wire-Free).
- **Model Code**: Monospace SKU identifier for easy reference (e.g. NX-DM800-AI).
- **Rating**: Star breakdown and review count.
- **Specs Grid**: Quick attributes including Resolution (4K), Night Vision range, Lens FOV, and Weatherproof rating (IP67/IK10).
- **Actions**:
  - Full Specifications modal trigger (`onSelect`).
  - Add to Quote button (`onAddToCart`) with toggle state.
