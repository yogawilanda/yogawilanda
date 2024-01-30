function consoleMessage( message) {
  console.log(message);
}
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
    var  HERO_SECTION_FILENAME = "hero-section";
    var ABOUT_SECTION_FILENAME = "about-section";
    var SKILL_SECTION_FILENAME = "skill-section";

    var HERO_PLACEHOLDER_ID = "hero-content";
    var ABOUT_PLACEHOLDER_ID = "about-content";
    var SKILL_PLACEHOLDER_ID = "skill-content";

    const components = [
      { name: HERO_SECTION_FILENAME, placeholderId:  HERO_PLACEHOLDER_ID },
      { name: ABOUT_SECTION_FILENAME, placeholderId:  ABOUT_PLACEHOLDER_ID},
      { name: SKILL_SECTION_FILENAME, placeholderId:  SKILL_PLACEHOLDER_ID},
    ];

    try {
      await Promise.all(components.map(async (component) => {
        await this.loadComponent(component.name, component.placeholderId);
      }));
      consoleMessage("All components cooked, bon appetit!");
      
    } catch (error) {
      console.error('Error loading components:', error);
    }
  }
}
