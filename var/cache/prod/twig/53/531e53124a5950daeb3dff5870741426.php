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

/* buscador/mostrar/trasfondos.html.twig */
class __TwigTemplate_a0bc0d8ec0fe1f8e6703116a2ab03d12 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/trasfondos.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "nombre", [], "any", false, false, false, 13), "html", null, true);
        yield "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Plano", [], "any", false, false, false, 15) != null)) {
            yield "<h3>Plano: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Plano", [], "any", false, false, false, 15), "html", null, true);
            yield "</h3>";
        }
        yield "<br>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Descripcion", [], "any", false, false, false, 15), "html", null, true);
        yield "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "img", [], "any", false, false, false, 16), "html", null, true);
        yield "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Competencias y objetos iniciales</h1>
            <table class=\"Progreso\">
                ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Idiomas", [], "any", false, false, false, 22) != null)) {
            // line 23
            yield "                <tr>
                    <td><b>Idiomas</b></td>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Idiomas", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                </tr>
                ";
        }
        // line 28
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Competencias", [], "any", false, false, false, 28) != null)) {
            // line 29
            yield "                <tr>
                    <td><b>Competencias</b></td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Competencias", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                </tr>
                ";
        }
        // line 34
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "ObjetosIniciales", [], "any", false, false, false, 34) != null)) {
            // line 35
            yield "                <tr>
                    <td><b>Objetos Iniciales</b></td>
                    <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trasfondo"] ?? null), "ObjetosIniciales", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                </tr>
                ";
        }
        // line 40
        yield "            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de trasfondo</h1>
            <div>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rasgos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 46
            yield "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 47), "html", null, true);
            yield "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 49), "html", null, true);
            yield "</i></b></span>
                        <span class=\"D\">";
            // line 50
            $context["parraf"] = "";
            // line 51
            yield "                                        ";
            $context["buffer"] = 0;
            // line 52
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 52))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                yield "                                            ";
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 54
                    yield "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 55
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 55), $context["i"], 5) == "{|S|}")) {
                    // line 56
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), "
"]);
                    // line 57
                    yield "                                                ";
                    $context["buffer"] = 4;
                    // line 58
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 58), $context["i"], 5) == "{|B|}")) {
                    // line 59
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 60
                    $context["parraf"] = "";
                    // line 61
                    yield "                                                <b>
                                                ";
                    // line 62
                    $context["buffer"] = 4;
                    // line 63
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 63), $context["i"], 5) == "{|I|}")) {
                    // line 64
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 65
                    $context["parraf"] = "";
                    // line 66
                    yield "                                                <i>
                                                ";
                    // line 67
                    $context["buffer"] = 4;
                    // line 68
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 68), $context["i"], 6) == "{|/B|}")) {
                    // line 69
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 70
                    $context["parraf"] = "";
                    // line 71
                    yield "                                                </b>
                                                ";
                    // line 72
                    $context["buffer"] = 5;
                    // line 73
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 73), $context["i"], 6) == "{|/I|}")) {
                    // line 74
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 75
                    $context["parraf"] = "";
                    // line 76
                    yield "                                                </i>
                                                ";
                    // line 77
                    $context["buffer"] = 5;
                    // line 78
                    yield "                                            ";
                } else {
                    // line 79
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 79), $context["i"], 1)]);
                    // line 80
                    yield "                                            ";
                }
                // line 81
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "                                        ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
            yield "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "            </div>
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
        return "buscador/mostrar/trasfondos.html.twig";
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
        return array (  273 => 86,  262 => 82,  256 => 81,  253 => 80,  250 => 79,  247 => 78,  245 => 77,  242 => 76,  240 => 75,  235 => 74,  232 => 73,  230 => 72,  227 => 71,  225 => 70,  220 => 69,  217 => 68,  215 => 67,  212 => 66,  210 => 65,  205 => 64,  202 => 63,  200 => 62,  197 => 61,  195 => 60,  190 => 59,  187 => 58,  184 => 57,  180 => 56,  177 => 55,  174 => 54,  171 => 53,  166 => 52,  163 => 51,  161 => 50,  157 => 49,  152 => 47,  149 => 46,  145 => 45,  138 => 40,  132 => 37,  128 => 35,  125 => 34,  119 => 31,  115 => 29,  112 => 28,  106 => 25,  102 => 23,  100 => 22,  91 => 16,  81 => 15,  76 => 13,  68 => 7,  64 => 6,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/trasfondos.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\trasfondos.html.twig");
    }
}
