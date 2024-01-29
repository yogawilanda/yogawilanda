export class ComponentLoader {
  async loadComponent(componentName, placeholderId) {
    console.log("Cooking the component: " + `ComponentLoader.loadComponent(${componentName})`);

    try {
      const response = await fetch(`components/${componentName}.html`);

      if (!response.ok) {
        throw new Error(`Failed to load ${componentName}.html: Network response was not ok`);
      }

      const html = await response.text();

      const contentElement = document.getElementById(`${placeholderId}-placeholder`);

      if (contentElement) {
        contentElement.innerHTML = html;
      } else {
        console.error(`Element with ID "${placeholderId}-placeholder" not found for ${componentName}`);
      }
    } catch (error) {
      console.error(`Error loading ${componentName}.html:`, error);
    }
  }

  async loadComponents() {
    // name: file name of the component
    // placeholderId: ID of the element where the component will be injected
    const components = [
      { name: 'hero-section', placeholderId: 'hero-content' },
      { name: 'about', placeholderId: 'about-content' },
      { name: 'skill', placeholderId: 'skill-content' },
      // Add more components as needed
    ];

    try {
      await Promise.all(components.map(async (component) => {
        await this.loadComponent(component.name, component.placeholderId);
      }));

      console.log('All components cooked, bon appetit!');
    } catch (error) {
      console.error('Error loading components:', error);
    }
  }
}
