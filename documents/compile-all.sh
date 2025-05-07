#!/bin/bash

/usr/bin/latexmk -output-directory=build -pdf -pdflatex="xelatex %O %S" cv-short.tex
/usr/bin/latexmk -output-directory=build -pdf -pdflatex="xelatex %O %S" cv-short-ru.tex
/usr/bin/latexmk -output-directory=build -pdf -pdflatex="xelatex %O %S" cv-full.tex
/usr/bin/latexmk -output-directory=build -pdf -pdflatex="xelatex %O %S" cv-full-ru.tex
