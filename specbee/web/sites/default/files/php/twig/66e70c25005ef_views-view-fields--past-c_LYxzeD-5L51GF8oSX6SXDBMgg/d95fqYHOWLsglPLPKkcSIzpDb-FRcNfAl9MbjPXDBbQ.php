<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/specbee/templates/views/views-view-fields--past-conferences.html.twig */
class __TwigTemplate_8312485d1f96c902a454274f19e2ca1f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"card-banner\">
\t";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2)) {
            // line 3
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 3), "content", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            yield "
\t";
        } else {
            // line 5
            yield "\t\t<span>
\t\t\t<i class=\"bi bi-tags\"></i>
\t\t</span>
\t\t<h2>Confrences</h2>
\t";
        }
        // line 10
        yield "</div>
<div class=\"card-details\">
\t<h2>";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 12), "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        yield "</h2>
\t<div class=\"managment\">
\t\t<img src=\"/themes/custom/specbee/images/tags.svg\" alt=\"tags\"/>
\t\t";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_management", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        yield "
\t</div>
\t<div class=\"card-date\">
\t\t<img src=\"/themes/custom/specbee/images/date.svg\" alt=\"Date\"/>
\t\t";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [], "any", false, false, true, 19), "content", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        yield "
\t</div>
\t<div class=\"card-location\">
\t\t<img src=\"/themes/custom/specbee/images/location.svg\" alt=\"Location\"/>
\t\t";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_location", [], "any", false, false, true, 23), "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        yield "
\t</div>
</div>
<div class=\"view-details\">
\t<span class=\"heart\"></span>
\t<span class=\"download\"></span>
\t<span class=\"share\"></span>
\t<div>";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 30), "content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/specbee/templates/views/views-view-fields--past-conferences.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  96 => 30,  86 => 23,  79 => 19,  72 => 15,  66 => 12,  62 => 10,  55 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card-banner\">
\t{% if fields.field_banner_image.content %}
\t\t{{ fields.field_banner_image.content }}
\t{% else %}
\t\t<span>
\t\t\t<i class=\"bi bi-tags\"></i>
\t\t</span>
\t\t<h2>Confrences</h2>
\t{% endif %}
</div>
<div class=\"card-details\">
\t<h2>{{ fields.title.content }}</h2>
\t<div class=\"managment\">
\t\t<img src=\"/themes/custom/specbee/images/tags.svg\" alt=\"tags\"/>
\t\t{{ fields.field_management.content }}
\t</div>
\t<div class=\"card-date\">
\t\t<img src=\"/themes/custom/specbee/images/date.svg\" alt=\"Date\"/>
\t\t{{ fields.field_date.content }}
\t</div>
\t<div class=\"card-location\">
\t\t<img src=\"/themes/custom/specbee/images/location.svg\" alt=\"Location\"/>
\t\t{{ fields.field_location.content }}
\t</div>
</div>
<div class=\"view-details\">
\t<span class=\"heart\"></span>
\t<span class=\"download\"></span>
\t<span class=\"share\"></span>
\t<div>{{ fields.view_node.content }}</div>
</div>
", "themes/custom/specbee/templates/views/views-view-fields--past-conferences.html.twig", "/home/ajay/Documents/specbee/specbee-assignment/specbee/web/themes/custom/specbee/templates/views/views-view-fields--past-conferences.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
