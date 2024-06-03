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

/* revisiones/revisiones_dote.html.twig */
class __TwigTemplate_2de5fd3bec2f9ec5e68487916e35e151 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "revisiones/revisiones_dote.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<div class=\"lista_revisiones\">
    <h1>Revisiones de las Dotes</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["revisiones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 8
            yield "    <div class=\"elemento_revisiones\">
        <img src=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revision"], "img", [], "any", false, false, false, 9), "html", null, true);
            yield "\">
        <h2>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revision"], "Nombre", [], "any", false, false, false, 10), "html", null, true);
            yield "</h2>
        <div>
            <button onclick=\"location.href='";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comprobar_dote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            yield "'\" class=\"btn btn-info\">Ver más</button>
            <button onclick=\"location.href='";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validar_dote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "'\" class=\"btn btn-success\">Validar dote</button>
            <button onclick=\"location.href='";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eliminar_dote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            yield "'\" class=\"btn btn-danger\">Eliminar dote</button>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "</div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "revisiones/revisiones_dote.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 18,  80 => 14,  76 => 13,  72 => 12,  67 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revisiones/revisiones_dote.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\revisiones\\revisiones_dote.html.twig");
    }
}
