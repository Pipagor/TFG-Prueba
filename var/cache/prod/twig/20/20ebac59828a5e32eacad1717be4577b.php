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

/* buscador/mostrar/hechizos.html.twig */
class __TwigTemplate_906020c16e39389f6d79ca83a26137ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/hechizos.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "nombre", [], "any", false, false, false, 13), "html", null, true);
        yield "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">Nivel: ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Nivel", [], "any", false, false, false, 15), "html", null, true);
        yield "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "img", [], "any", false, false, false, 16), "html", null, true);
        yield "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Datos técnicos del hechizo</h1>
            <table class=\"Progreso\">
                <tr>
                    <td><b>Escuela</b></td>
                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Escuela", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><b>Componentes</b></td>
                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Componentes", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><b>Alcance</b></td>
                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Rango", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><b>Área de efecto</b></td>
                    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "ZonaEfecto", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><b>Tiempo de Ejecución</b></td>
                    <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "TiempoDeEjecucion", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><b>Duración</b></td>
                    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Duracion", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                </tr>
            </table>
        </div>
        <div class=\"RC\">
            <h1>Beneficios</h1>
            <div class=\"grid-rasgos\">
                <span class=\"N\"><b>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Nombre", [], "any", false, false, false, 51), "html", null, true);
        yield "</b></span>
                <span class=\"V1\"></span>
                <span class=\"L\"><b>Nivel: ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Nivel", [], "any", false, false, false, 53), "html", null, true);
        yield "</b></span>
                <span class=\"D\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hechizo"] ?? null), "Descripcion", [], "any", false, false, false, 54), "html", null, true);
        yield "</span> 
            </div>
        </div>
        <div class=\"SU\"></div>
    </div>
    
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/mostrar/hechizos.html.twig";
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
        return array (  150 => 54,  146 => 53,  141 => 51,  131 => 44,  124 => 40,  117 => 36,  110 => 32,  103 => 28,  96 => 24,  85 => 16,  81 => 15,  76 => 13,  68 => 7,  64 => 6,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/hechizos.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\hechizos.html.twig");
    }
}
