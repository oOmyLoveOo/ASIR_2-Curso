import os

def create_directories(path, subdirectories):
    os.makedirs(path, exist_ok=True)
    for directorie in subdirectories[0]:
        try:
            create_directories(path + "/" + directorie, subdirectories[1:])
        except:
            print("Fin de " + directorie)
    


# Define your directory structure
directory_structure = [
    ['ASG', 'ASO','IAW','SRI','SAD','EIE'],  # Top-level directories
    ['Tema1','Tema2','Tema3','Tema4','Tema5','Tema6','Tema7','Tema8','Tema9','Tema10','Tema11','Tema12'],  # Subdirectories
    ['Actividad1', 'Actividad2', 'Actividad3', 'Actividad4']  # Sub-subdirectories
]


base_path = '.'
base_name = "Directorios"

# Create the directories
create_directories(base_path + "/" + base_name, directory_structure)
