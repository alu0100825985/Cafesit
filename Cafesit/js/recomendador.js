var tree = [];
var treeOcur = [];
var vocabulario = [];
var vocabularioOcur = [];
var numDocs;
var numPalabras;

public Aprendizaje (var file, var voc, var vocOcurr) {
    tree =  new TreeMap <String,Integer> ();
    vocabulario = voc;
    var datos;
    BufferedReader reader = new BufferedReader( new FileReader(file) );

    numDocs = 0;
    numPalabras = 0;

    while ( reader.ready() ) {
      datos = reader.readLine();
      numDocs++;

      String [] valores = datos.split("@([A-Za-z0-9]+)|\\W");     // Quita usuarios, y cadenas que no sean palabras

      int tokensEnlace = 0;

      for(int k = 1; k < valores.length; k++) {
        if(valores[k].length() != 0) {
          if(tokensEnlace != 0) {
            tokensEnlace--;
          } else {
            String key = valores[k].toLowerCase();
            if(key.equals("http") || key.equals("https") || key.equals("www")) {
              tokensEnlace = 3;
            } else {
              if(tree.containsKey(key) == false)
                tree.put(key, 1);
              else {
                Integer count = tree.get(key);
                tree.remove(key);
                tree.put(key, count + 1);
              }
              numPalabras++;
            }
          }
        }
      }
    }

    reader.close();
  }

  /**
   * Recorre el TreeMap con un iterador, y muestra cada palabra (clave).
   */

  public void mostrar () {
    Iterator<String> iter = tree.keySet().iterator();

    while( iter.hasNext() ) {
      String key = iter.next();
      System.out.println(key);
    }
  }

  /**
   * Exporta en un fichero "vocabulario.txt"
   * @throws IOException
   */

  public void exportar (String file) throws IOException {
    FileWriter fichero = null;
    fichero = new FileWriter("src/clasificaciondetextos/" + file);

    fichero.write("Numero de documentos del corpus:");
    fichero.write(numDocs + "\n");

    fichero.write("Numero de palabras del corpus:");
    fichero.write(numPalabras + "\n");

    Iterator<String> iter = vocabulario.keySet().iterator();
    int numDesconocidas = 0;

    while( iter.hasNext() ) {
      String key = iter.next();
      if(tree.get(key) != null) {
        double prob = (double)(tree.get(key) + 1) / (double)(numPalabras + vocabulario.size() + 1);
        double logProb = log2(prob);
        fichero.write("Palabra:" + key + " Frec:" + tree.get(key) + " LogProb:" + logProb + "\n");
      } else {
        numDesconocidas++;
      }
    }

    double prob = (double)(numDesconocidas + 1) / (double)(numPalabras + vocabulario.size() + 1);
    double logProb = log2(prob);
    fichero.write("Palabra:<unknown>" + " Frec:" + numDesconocidas + " LogProb:" + logProb + "\n");

    fichero.close();
  }

  public double log2 (double n) {
    return (Math.log(n) / Math.log(2));
  }
}
