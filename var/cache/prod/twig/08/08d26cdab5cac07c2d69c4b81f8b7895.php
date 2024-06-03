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

/* personaje/ficha.html.twig */
class __TwigTemplate_7888bb923b7316a1f39d6c01fd522e5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "    </head>
    <body class=\"grid-body\">
    <div class=\"L1\"></div>
    <div class=\"L2\"></div>
    <div class=\"DC\">
            <span class=\"Nombre\"><b>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["datos"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Nombre"] ?? null) : null), "html", null, true);
        yield "</b>: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["datos"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Clase"] ?? null) : null), "Nombre", [], "any", false, false, false, 21), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = ($context["datos"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Subclase"] ?? null) : null), "Nombre", [], "any", false, false, false, 21), "html", null, true);
        yield " de nivel ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["datos"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Nivel"] ?? null) : null), "html", null, true);
        yield "</span>
            <br><span>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["datos"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Raza"] ?? null) : null), "Nombre", [], "any", false, false, false, 22), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = ($context["datos"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Subraza"] ?? null) : null), "Nombre", [], "any", false, false, false, 22), "html", null, true);
        yield ".</span>
            <br><span>Trasfondo: ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = ($context["datos"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["Ocupacion"] ?? null) : null), "Nombre", [], "any", false, false, false, 23), "html", null, true);
        yield " de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = ($context["datos"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["Origen"] ?? null) : null), "Nombre", [], "any", false, false, false, 23), "html", null, true);
        yield "</span>
            <br><span>Ataque desarmado: ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = ($context["datos"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Subraza"] ?? null) : null), "AtaqueDesarmado", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
            <hr>
    </div>
    <div class=\"TP\">
        <div class=\"grid-ficha-stats1\">
            <div class=\"Fuerza\">
                <h4>Estadísticas</h4>
                <div class=\"puntuacion\"></div><i>Base ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((8 + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = ($context["datos"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Raza"] ?? null) : null), "Fuerza", [], "any", false, false, false, 31)) + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = ($context["datos"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Subraza"] ?? null) : null), "Fuerza", [], "any", false, false, false, 31)), "html", null, true);
        yield "</i>
            </div>
            <div class=\"Destreza\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((8 + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = ($context["datos"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Raza"] ?? null) : null), "Destreza", [], "any", false, false, false, 34)) + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = ($context["datos"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Subraza"] ?? null) : null), "Destreza", [], "any", false, false, false, 34)), "html", null, true);
        yield "</i>
            </div>
            <div class=\"Constitucion\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((8 + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = ($context["datos"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Raza"] ?? null) : null), "Constitucion", [], "any", false, false, false, 37)) + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = ($context["datos"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Subraza"] ?? null) : null), "Constitucion", [], "any", false, false, false, 37)), "html", null, true);
        yield "</i>
            </div>
            <div class=\"Inteligencia\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((8 + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_15 = ($context["datos"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Raza"] ?? null) : null), "Inteligencia", [], "any", false, false, false, 40)) + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = ($context["datos"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Subraza"] ?? null) : null), "Inteligencia", [], "any", false, false, false, 40)), "html", null, true);
        yield "</i>
            </div>
            <div class=\"Sabiduria\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((8 + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = ($context["datos"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Raza"] ?? null) : null), "Sabiduria", [], "any", false, false, false, 43)) + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_18 = ($context["datos"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["Subraza"] ?? null) : null), "Sabiduria", [], "any", false, false, false, 43)), "html", null, true);
        yield "</i>
            </div>
            <div class=\"Carisma\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((8 + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_19 = ($context["datos"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Raza"] ?? null) : null), "Carisma", [], "any", false, false, false, 46)) + CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_20 = ($context["datos"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["Subraza"] ?? null) : null), "Carisma", [], "any", false, false, false, 46)), "html", null, true);
        yield "</i>
            </div>
        </div>
        
    </div>
    <div class=\"RC\">
        <div class=\"grid-ficha-stats2\">
            <div class=\"Salvaciones\">
                <div class=\"espacio\">
                    <h4>Salvaciones</h4>
                </div>
                <div class=\"Fuerza\">
                    ";
        // line 58
        if (CoreExtension::inFilter("Fuerza", CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_21 = ($context["datos"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 58))) {
            // line 59
            yield "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 61
            yield "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 63
        yield "                </div>
                <div class=\"A\">Fuerza</div>
                <div class=\"Destreza\">
                    ";
        // line 66
        if (CoreExtension::inFilter("Destreza", CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_22 = ($context["datos"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 66))) {
            // line 67
            yield "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 69
            yield "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 71
        yield "                </div>
                <div class=\"N\">Destreza</div>
                <div class=\"Constitucion\">
                    ";
        // line 74
        if (CoreExtension::inFilter("Constitución", CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_23 = ($context["datos"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 74))) {
            // line 75
            yield "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 77
            yield "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 79
        yield "                </div>
                <div class=\"E\">Constitución</div>
                <div class=\"Inteligencia\">
                    ";
        // line 82
        if (CoreExtension::inFilter("Inteligencia", CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_24 = ($context["datos"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 82))) {
            // line 83
            yield "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 85
            yield "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 87
        yield "                </div>
                <div class=\"I\">Inteligencia</div>
                <div class=\"Sabiduria\">
                    ";
        // line 90
        if (CoreExtension::inFilter("Sabiduría", CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_25 = ($context["datos"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 90))) {
            // line 91
            yield "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 93
            yield "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 95
        yield "                </div>
                <div class=\"V1\">Sabiduría</div>
                <div class=\"Carisma\">
                    ";
        // line 98
        if (CoreExtension::inFilter("Carisma", CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_26 = ($context["datos"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 98))) {
            // line 99
            yield "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 101
            yield "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 103
        yield "                </div>
                <div class=\"V2\">Carisma</div>
            </div>
            <div class=\"Skills\">
                <div class=\"espacio\"><h4>Aptitudes</h4></div>
                <div class=\"Cs1\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s1\">
                    <span>Acrobacias</span>  
                </div>
                <div class=\"Cs2\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s2\">
                    <span>Trato con Animales</span>  
                </div>
                <div class=\"Cs3\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s3\">
                    <span>Arcano</span>  
                </div>
                <div class=\"Cs4\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s4\">
                    <span>Engaño</span>  
                </div>
                <div class=\"Cs5\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s5\">
                    <span>Historia</span>  
                </div>
                <div class=\"Cs6\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s6\">
                    <span>Perspicacia</span>  
                </div>
                <div class=\"Cs7\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s7\">
                    <span>Intimidación</span>  
                </div>
                <div class=\"Cs8\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s8\">
                    <span>Investigación</span>  
                </div>
                <div class=\"Cs9\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s9\">
                    <span>Medicina</span>  
                </div>
                <div class=\"Cs10\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s10\">
                    <span>Naturaleza</span>  
                </div>
                <div class=\"Cs11\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s11\">
                    <span>Percepción</span>  
                </div>
                <div class=\"Cs12\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s12\">
                    <span>Atletismo</span>  
                </div>
                <div class=\"Cs13\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s13\">
                    <span>Interpretación</span>  
                </div>
                <div class=\"Cs14\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s14\">
                    <span>Persuasión</span>  
                </div>
                <div class=\"Cs15\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s15\">
                    <span>Religión</span>  
                </div>
                <div class=\"Cs16\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s16\">
                    <span>Juego de Manos</span>  
                </div>
                <div class=\"Cs17\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s17\">
                    <span>Sigilo</span>  
                </div>
                <div class=\"Cs18\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s18\">
                    <span>Supervivencia</span>  
                </div>

            </div>
        </div>
    </div>
    <div class=\"SU\">
    <hr>
    <h2>Descripciones de habilidades</h2><hr><br>
        ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_27 = ($context["datos"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Habilidades"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["elemento"]) {
            // line 224
            yield "                    <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Nombre", [], "any", false, false, false, 224), "html", null, true);
            yield "</h4>
                    <i>Habilidad 
                    ";
            // line 226
            if (CoreExtension::inFilter("trasfondo_", CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "OrigenID", [], "any", false, false, false, 226))) {
                // line 227
                yield "                    de Trasfondo 
                    ";
            } elseif (CoreExtension::inFilter("razas_", CoreExtension::getAttribute($this->env, $this->source,             // line 228
$context["elemento"], "OrigenID", [], "any", false, false, false, 228))) {
                // line 229
                yield "                    de Raza
                    ";
            } elseif (CoreExtension::inFilter("clases_", CoreExtension::getAttribute($this->env, $this->source,             // line 230
$context["elemento"], "OrigenID", [], "any", false, false, false, 230))) {
                // line 231
                yield "                    de Clase
                    ";
            }
            // line 233
            yield "                    obtenida a nivel: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "OrigenNivel", [], "any", false, false, false, 233), "html", null, true);
            yield "</i><br><hr>
                                    <p>";
            // line 234
            $context["parraf"] = "";
            // line 235
            yield "                                        ";
            $context["buffer"] = 0;
            // line 236
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 236))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 237
                yield "                                            ";
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 238
                    yield "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 239
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 239), $context["i"], 5) == "{|S|}")) {
                    // line 240
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), "
"]);
                    // line 241
                    yield "                                                ";
                    $context["buffer"] = 4;
                    // line 242
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 242), $context["i"], 5) == "{|B|}")) {
                    // line 243
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 244
                    $context["parraf"] = "";
                    // line 245
                    yield "                                                <b>
                                                ";
                    // line 246
                    $context["buffer"] = 4;
                    // line 247
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 247), $context["i"], 5) == "{|I|}")) {
                    // line 248
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 249
                    $context["parraf"] = "";
                    // line 250
                    yield "                                                <i>
                                                ";
                    // line 251
                    $context["buffer"] = 4;
                    // line 252
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 252), $context["i"], 6) == "{|/B|}")) {
                    // line 253
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 254
                    $context["parraf"] = "";
                    // line 255
                    yield "                                                </b>
                                                ";
                    // line 256
                    $context["buffer"] = 5;
                    // line 257
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 257), $context["i"], 6) == "{|/I|}")) {
                    // line 258
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 259
                    $context["parraf"] = "";
                    // line 260
                    yield "                                                </i>
                                                ";
                    // line 261
                    $context["buffer"] = 5;
                    // line 262
                    yield "                                            ";
                } else {
                    // line 263
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 263), $context["i"], 1)]);
                    // line 264
                    yield "                                            ";
                }
                // line 265
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            yield "                                        ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
            yield "</p><br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elemento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        yield "    </div>
    </body>
</html>";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Ficha de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_28 = ($context["datos"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["Nombre"] ?? null) : null), "html", null, true);
        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        yield "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        ";
        return; yield '';
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 15
        yield "        ";
        return; yield '';
    }

    // line 14
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "personaje/ficha.html.twig";
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
        return array (  537 => 14,  532 => 15,  529 => 14,  525 => 13,  517 => 9,  512 => 8,  508 => 7,  499 => 5,  492 => 268,  483 => 266,  477 => 265,  474 => 264,  471 => 263,  468 => 262,  466 => 261,  463 => 260,  461 => 259,  456 => 258,  453 => 257,  451 => 256,  448 => 255,  446 => 254,  441 => 253,  438 => 252,  436 => 251,  433 => 250,  431 => 249,  426 => 248,  423 => 247,  421 => 246,  418 => 245,  416 => 244,  411 => 243,  408 => 242,  405 => 241,  401 => 240,  398 => 239,  395 => 238,  392 => 237,  387 => 236,  384 => 235,  382 => 234,  377 => 233,  373 => 231,  371 => 230,  368 => 229,  366 => 228,  363 => 227,  361 => 226,  355 => 224,  351 => 223,  229 => 103,  225 => 101,  221 => 99,  219 => 98,  214 => 95,  210 => 93,  206 => 91,  204 => 90,  199 => 87,  195 => 85,  191 => 83,  189 => 82,  184 => 79,  180 => 77,  176 => 75,  174 => 74,  169 => 71,  165 => 69,  161 => 67,  159 => 66,  154 => 63,  150 => 61,  146 => 59,  144 => 58,  129 => 46,  123 => 43,  117 => 40,  111 => 37,  105 => 34,  99 => 31,  89 => 24,  83 => 23,  77 => 22,  67 => 21,  60 => 16,  58 => 13,  55 => 12,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "personaje/ficha.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\personaje\\ficha.html.twig");
    }
}
