# Component Architecture Rules

1. **Accessibility**: Every interactive button and input must possess appropriate ARIA attributes, semantic labels, and keyboard focus states.
2. **Type Safety**: All components must consume strictly typed TypeScript models defined in `src/types.ts`.
3. **No Dead Clicks**: All buttons (Add to Quote, Select Package, PTZ joystick, Night Vision toggle, Cost Calculator) must have real working state handlers and reactive UI feedback.
4. **Performance**: Avoid unnecessary re-renders. Use CSS transforms for PTZ joystick simulation.
