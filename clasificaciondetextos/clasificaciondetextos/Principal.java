package clasificaciondetextos;

import java.io.*;
import javax.swing.JFrame;


/**
 * Alexis Daniel Fuentes P�rez
 * Luis David Padilla Martin
 */

public class Principal {
  
  /**
   * 
   * @param args Nombre del fichero de texto
   * @throws FileNotFoundException
   * @throws IOException
   */

  public static void main(String[] args) throws FileNotFoundException, IOException {
    Vocabulario vocabulario = new Vocabulario(args[0]);
    vocabulario.exportar();
    
    Aprendizaje ap1 = new Aprendizaje ("src/clasificaciondetextos/corpusrel.txt", vocabulario.getVocabulario());
    ap1.exportar("aprendizajerel.txt");
    
    Aprendizaje ap2 = new Aprendizaje ("src/clasificaciondetextos/corpusnrel.txt", vocabulario.getVocabulario());
    ap2.exportar("aprendizajenrel.txt");
  }

}
