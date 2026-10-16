---
title: About
visible: true
---

<div class="about-page">

    <h1>About Us</h1>

    <p>
        Welcome to my website, a space created to explore modern web design,
        digital publishing and content management. The site combines editorial
        content with a custom dark interface and a simple file-based content
        structure.
    </p>

    <img src="{{ page.media['dark-workspace.jpg'].url }}"
         alt="Creative digital workspace"
         style="width: 100%; max-height: 420px; object-fit: cover; object-position: center bottom;">

    <hr>

    <h2>About the Website</h2>

    <p>
        The website was built using
        <a href="https://getgrav.org/" target="_blank" rel="noopener">
            Grav
        </a>,
        an open-source flat-file content management system. Grav stores
        website content as files rather than relying on a traditional
        database.
    </p>

    <p>
        This approach makes the website lightweight and easy to manage,
        while still allowing themes, plugins and custom code to be used
        to extend its functionality.
    </p>

    <div class="about-features">

        <div class="about-feature">
            <h3>Flat-File CMS</h3>
            <p>
                Content is stored in files, making the website lightweight,
                portable and easy to back up.
            </p>
        </div>

        <div class="about-feature">
            <h3>Flexible Design</h3>
            <p>
                Grav separates website content from presentation, allowing
                the theme and styling to be customized independently.
            </p>
        </div>

        <div class="about-feature">
            <h3>Extensible</h3>
            <p>
                Plugins can be added to extend the functionality of the CMS
                without having to build every feature from scratch.
            </p>
        </div>

    </div>

    <hr>

    <h2>Grav CMS</h2>

    <p>
        This website uses <strong>Grav 2.2.4</strong>. Grav was selected because
        it provides a simple file-based approach to content management while
        still offering themes, plugins and an administration interface.
    </p>

    <p>
        The main website content is stored in the
        <strong>user/pages</strong> directory. Each page can contain its own
        content, media files and configuration.
    </p>

    <p>
        More information about Grav can be found on the
        <a href="https://getgrav.org/" target="_blank" rel="noopener">
            official Grav website
        </a>.
    </p>

    <hr>

    <h2>Theme and Templates</h2>

    <p>
        The website uses the
        <a href="https://github.com/getgrav/grav-theme-antimatter"
           target="_blank"
           rel="noopener">
            Antimatter
        </a>
        theme as its frontend foundation.
    </p>

    <p>
        The original theme was customized extensively to create the current
        dark visual style. The colors, navigation, buttons, forms, typography,
        footer and other interface elements were modified using CSS.
    </p>

    <p>
        Different Grav templates are used for different types of content.
        The News page uses the <strong>Blog</strong> template to display a
        collection of articles, while individual News articles use the
        <strong>Item</strong> template. The Contact page uses the
        <strong>Form</strong> template to display and process the contact form.
    </p>

    <h3>Theme Changes</h3>

    <ul>
        <li>Created a dark overall color scheme.</li>
        <li>Customized the header and navigation.</li>
        <li>Customized links, buttons and forms.</li>
        <li>Added a full-width homepage banner.</li>
        <li>Customized the footer and navigation.</li>
        <li>Adjusted the News layout and article presentation.</li>
        <li>Added responsive styling for smaller screens.</li>
        <li>Added custom About page feature cards.</li>
    </ul>

    <hr>

    <h2>Plugins</h2>

    <p>
        Two additional plugins were installed as part of the project:
        <strong>Aura</strong> and <strong>Custom JS</strong>.
    </p>

    <h3>Aura</h3>

    <p>
        Aura is an additional Grav plugin installed to extend the functionality
        of the CMS beyond its basic installation.
    </p>

    <p>
        <a href="https://github.com/matt-j-m/grav-plugin-aura"
           target="_blank"
           rel="noopener">
            View the Aura plugin
        </a>
    </p>

    <h3>Custom JS</h3>

    <p>
        The Custom JS plugin allows additional JavaScript to be added to the
        website without directly modifying the theme or creating a separate
        plugin.
    </p>

    <p>
        The plugin is currently used to add an interactive image feature.
        When an image is clicked, JavaScript creates a dark overlay and
        displays an enlarged version of the image. Clicking the overlay closes
        the enlarged image.
    </p>

    <p>
        <a href="https://github.com/dimayakovlev/grav-plugin-custom-js"
           target="_blank"
           rel="noopener">
            View the Custom JS plugin
        </a>
    </p>

    <hr>

    <h2>Contact Form</h2>

    <p>
        The Contact page uses the Grav Form plugin to create a functional
        contact form. The form includes fields for the visitor's name,
        email address and message, together with validation and submission
        controls.
    </p>

    <p>
        The Grav Email plugin is configured to handle the sending of submitted
        form messages through SMTP. The form was tested successfully and
        confirmed to send messages to the configured email address.
    </p>

    <p>
        This demonstrates how Grav can combine its form functionality with
        email configuration to provide a working contact system.
    </p>

    <hr>

    <h2>Administration</h2>

    <p>
        Grav provides an administration interface for managing the website.
        The Admin panel can be used to create and edit pages, manage media,
        configure plugins, change settings, manage users and control other
        parts of the website.
    </p>

    <p>
        The administration interface for this local installation is available
        at:
    </p>

    <p>
        <strong>http://localhost:8000/admin</strong>
    </p>

    <p>
        Administrator credentials were created during the Grav Admin
        installation. The login details are kept private and are not
        displayed publicly on this website. They are provided separately
        when the project is submitted or demonstrated.
    </p>

    <hr>

    <h2>Project Structure</h2>

    <p>
        The website is organized into several main sections:
    </p>

    <ul>
        <li><strong>Home</strong> - the main landing page.</li>
        <li><strong>About</strong> - information about the website, CMS, theme and plugins.</li>
        <li><strong>News</strong> - an article-based section using the Grav Blog template.</li>
        <li><strong>Contact</strong> - a functional contact form using the Form template.</li>
    </ul>

    <p>
        The website also contains multiple News articles, each presented
        using Grav's Item template. This structure keeps the content organized
        while allowing different types of pages to use different templates.
    </p>

    <hr>

    <h2>Project Development</h2>

    <p>
        The default Grav website content and unnecessary menu items were
        removed and replaced with the site's own pages and content. The
        original Antimatter appearance was also modified rather than being
        left in its default state.
    </p>

    <p>
        The project was developed locally and version-controlled using Git.
        The website source is maintained in a GitHub repository so that
        changes can be tracked throughout development.
    </p>

    <hr>

    <h2>My Approach</h2>

    <p>
        The goal was to create a website that feels like a real digital
        publication rather than simply using the default Grav appearance.
        The combination of a customized theme, structured content,
        responsive styling and additional plugins demonstrates how a
        flat-file CMS can be adapted to different website requirements.
    </p>

    <p>
        The website can be extended further with additional pages, articles,
        plugins and design improvements while keeping the same lightweight
        file-based structure.
    </p>

</div>