"use strict";

/**
 * ============================================================
 * CamneX Component Loader
 * ------------------------------------------------------------
 * Loads reusable HTML components into target containers.
 *
 * Author: CamneX
 * Version: 1.0
 * ============================================================
 */

const ComponentLoader = (() => {

    /**
     * Load a single HTML component into a container.
     * @param {string} containerSelector
     * @param {string} componentPath
     */
    async function load(containerSelector, componentPath) {

        const container = document.querySelector(containerSelector);

        if (!container) {
            console.warn(`[ComponentLoader] Container not found: ${containerSelector}`);
            return;
        }

        try {

            const response = await fetch(componentPath);

            if (!response.ok) {
                throw new Error(`${response.status} ${response.statusText}`);
            }

            const html = await response.text();

            container.innerHTML = html;

        } catch (error) {

            console.error(
                `[ComponentLoader] Failed to load ${componentPath}`,
                error
            );

            container.innerHTML = `
                <div class="component-loader-error">
                    Failed to load component:
                    <strong>${componentPath}</strong>
                </div>
            `;

        }

    }

    /**
     * Load multiple components.
     * Components are loaded sequentially to preserve page order.
     */
    async function loadAll(components = []) {

        for (const component of components) {

            await load(
                component.container,
                component.path
            );

        }

    }

    return {

        load,

        loadAll

    };

})();

window.ComponentLoader = ComponentLoader;