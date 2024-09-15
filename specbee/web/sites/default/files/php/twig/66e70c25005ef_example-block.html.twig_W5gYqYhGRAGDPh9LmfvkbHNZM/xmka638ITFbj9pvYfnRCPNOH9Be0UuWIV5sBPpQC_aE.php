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

/* modules/custom/custom_module/templates/example-block.html.twig */
class __TwigTemplate_f133a2c97a8bb4c13416e7addc158f0e extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("specbee/specbee_slick"), "html", null, true);
        yield "
";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("specbee/global_styling"), "html", null, true);
        yield "
";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("specbee/google_fonts"), "html", null, true);
        yield "


<div class=\"custom_tabs\">
\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t<button class=\"nav-link tab-active active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Featured Conferences</button>
\t\t</li>
\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t<button class=\"nav-link tab-active\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Recomended Conferences</button>
\t\t</li>
\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t<button class=\"nav-link tab-active\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Past Conferences</button>
\t\t</li>
\t</ul>
\t<div class=\"tab-content slider-buttons\" id=\"myTabContent\">
\t\t<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "block1", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        yield "</div>
\t\t<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "block2", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        yield "</div>
\t\t<div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "block3", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        yield "</div>
\t\t";
        // line 32
        yield "\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/custom_module/templates/example-block.html.twig";
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
        return array (  83 => 32,  79 => 21,  75 => 20,  71 => 19,  52 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ attach_library('specbee/specbee_slick') }}
{{ attach_library('specbee/global_styling') }}
{{ attach_library('specbee/google_fonts') }}


<div class=\"custom_tabs\">
\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t<button class=\"nav-link tab-active active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Featured Conferences</button>
\t\t</li>
\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t<button class=\"nav-link tab-active\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Recomended Conferences</button>
\t\t</li>
\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t<button class=\"nav-link tab-active\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Past Conferences</button>
\t\t</li>
\t</ul>
\t<div class=\"tab-content slider-buttons\" id=\"myTabContent\">
\t\t<div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">{{data.block1}}</div>
\t\t<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">{{data.block2}}</div>
\t\t<div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">{{data.block3}}</div>
\t\t{# <button id=\"prev\">
\t\t\t<svg width=\"19\" height=\"30\" viewbox=\"0 0 19 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.4218 -0.00292969L19 3.50604L7.18616 14.9961L19 26.4861L15.4218 29.9951L0 14.9951L15.4218 -0.00292969Z\" fill=\"#9BA5AC\"/>
\t\t\t</svg>
\t\t</button>
\t\t<button id=\"next\">
\t\t\t<svg width=\"19\" height=\"30\" viewbox=\"0 0 19 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.4218 -0.00292969L19 3.50604L7.18616 14.9961L19 26.4861L15.4218 29.9951L0 14.9951L15.4218 -0.00292969Z\" fill=\"#9BA5AC\"/>
\t\t\t</svg>
\t\t</button> #}
\t</div>
</div>
", "modules/custom/custom_module/templates/example-block.html.twig", "/home/ajay/Documents/specbee/specbee-assignment/specbee/web/modules/custom/custom_module/templates/example-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library'],
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
