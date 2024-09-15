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

/* themes/custom/specbee/templates/views/views-view-fields--featured-conferences.html.twig */
class __TwigTemplate_29077b49f06f83a357ad880cb9484151 extends Template
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
        if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2)) > 0))) {
            // line 3
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 3), "content", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            yield "
\t";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 4), "content", [], "any", false, false, true, 4))) {
            // line 5
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_banner_image", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            yield "
\t";
        } else {
            // line 7
            yield "\t\t<span>
\t\t\t<i class=\"bi bi-tags\"></i>
\t\t</span>
\t\t<h2>Conferences</h2>
\t";
        }
        // line 12
        yield "\t<span>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_price_tag", [], "any", false, false, true, 12), "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        yield "</span>
</div>
";
        // line 15
        yield "\t<div class=\"card-details\">
\t\t<h2>";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 16), "content", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        yield "</h2>
\t\t<div class=\"managment\">
\t\t\t<img src=\"/themes/custom/specbee/images/tags.svg\" alt=\"tags\"/>
\t\t\t";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_management", [], "any", false, false, true, 19), "content", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        yield "
\t\t</div>
\t\t<div class=\"card-date\">
\t\t\t<img src=\"/themes/custom/specbee/images/date.svg\" alt=\"Date\"/>
\t\t\t";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [], "any", false, false, true, 23), "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        yield "
\t\t</div>
\t\t<div class=\"card-location\">
\t\t\t<img src=\"/themes/custom/specbee/images/location.svg\" alt=\"Location\"/>
\t\t\t";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_location", [], "any", false, false, true, 27), "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        yield "
\t\t</div>
\t</div>
\t<div class=\"view-details\">
\t\t<span class=\"heart\">
\t\t\t";
        // line 33
        yield "\t\t</span>
\t\t<span class=\"download\">
\t\t\t";
        // line 36
        yield "\t\t</span>
\t\t<span class=\"share\">
\t\t\t";
        // line 39
        yield "\t\t</span>
\t\t<div>";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        yield "</div>
\t</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/specbee/templates/views/views-view-fields--featured-conferences.html.twig";
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
        return array (  117 => 40,  114 => 39,  110 => 36,  106 => 33,  98 => 27,  91 => 23,  84 => 19,  78 => 16,  75 => 15,  69 => 12,  62 => 7,  56 => 5,  54 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card-banner\">
\t{% if fields.field_banner_image.content is iterable and fields.field_banner_image.content|length > 0 %}
\t\t{{ fields.field_banner_image.content }}
\t{% elseif fields.field_banner_image.content is not empty %}
\t\t{{ fields.field_banner_image.content }}
\t{% else %}
\t\t<span>
\t\t\t<i class=\"bi bi-tags\"></i>
\t\t</span>
\t\t<h2>Conferences</h2>
\t{% endif %}
\t<span>{{ fields.field_price_tag.content }}</span>
</div>
{# <div class=\"wrapper\"> #}
\t<div class=\"card-details\">
\t\t<h2>{{ fields.title.content }}</h2>
\t\t<div class=\"managment\">
\t\t\t<img src=\"/themes/custom/specbee/images/tags.svg\" alt=\"tags\"/>
\t\t\t{{ fields.field_management.content }}
\t\t</div>
\t\t<div class=\"card-date\">
\t\t\t<img src=\"/themes/custom/specbee/images/date.svg\" alt=\"Date\"/>
\t\t\t{{ fields.field_date.content }}
\t\t</div>
\t\t<div class=\"card-location\">
\t\t\t<img src=\"/themes/custom/specbee/images/location.svg\" alt=\"Location\"/>
\t\t\t{{ fields.field_location.content }}
\t\t</div>
\t</div>
\t<div class=\"view-details\">
\t\t<span class=\"heart\">
\t\t\t{# <i class=\"bi bi-heart\"></i> #}
\t\t</span>
\t\t<span class=\"download\">
\t\t\t{# <i class=\"bi bi-cloud-arrow-down\"></i> #}
\t\t</span>
\t\t<span class=\"share\">
\t\t\t{# <i class=\"bi bi-share-fill\"></i> #}
\t\t</span>
\t\t<div>{{ fields.view_node.content }}</div>
\t</div>
{# </div> #}
", "themes/custom/specbee/templates/views/views-view-fields--featured-conferences.html.twig", "/home/ajay/Documents/specbee/specbee-assignment/specbee/web/themes/custom/specbee/templates/views/views-view-fields--featured-conferences.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("length" => 2, "escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['length', 'escape'],
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
